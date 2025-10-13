<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/berita', $image->hashName());

        Berita::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        return redirect()->route('admin.news.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        // For now, we don't have a specific show page in admin, redirect to edit.
        return redirect()->route('admin.news.edit', $berita->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $news)
    {
        return view('admin.berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $news)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
            'image'   => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/berita', $image->hashName());

            Storage::delete('public/berita/'.$news->image);

            $news->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {
            $news->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        return redirect()->route('admin.news.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $news)
    {
        Storage::delete('public/berita/'. $news->image);
        $news->delete();
        return redirect()->route('admin.news.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
