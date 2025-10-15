<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Handle Profile Information Update
        if ($request->has('name') || $request->has('email') || $request->has('phone')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'phone' => ['nullable', 'string', 'max:255'],
            ]);

            $user->fill($request->only('name', 'email', 'phone'));

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            return redirect()->route('admin.profile.edit')->with('success', 'Informasi profil berhasil diperbarui.');
        }

        // Handle Password Update
        if ($request->has('current_password') || $request->has('password') || $request->has('password_confirmation')) {
            $request->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('admin.profile.edit')->with('success', 'Kata sandi berhasil diperbarui.');
        }

        return redirect()->route('admin.profile.edit');
    }
}
