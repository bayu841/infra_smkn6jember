<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PublicBeritaController extends Controller
{
    public function index(Request $request)
    {
        $lastPosts = Berita::latest()->take(3)->get();
        $popularNews = Berita::inRandomOrder()->take(3)->get();

        $beritasQuery = Berita::query();

        if ($request->has('search') && $request->input('search') != '') {
            $searchTerm = $request->input('search');
            $beritasQuery->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                      ->orWhere('content', 'like', '%' . $searchTerm . '%')
                      ->orWhereHas('categories', function ($q) use ($searchTerm) {
                          $q->where('name', 'like', '%' . $searchTerm . '%');
                      });
            });
        }

        $beritas = $beritasQuery->latest()->paginate(6);

        return view('berita', compact('lastPosts', 'popularNews', 'beritas'));
    }

    public function show(Berita $berita)
    {
        $cookieName = 'berita_viewed_' . $berita->id;
        if (!Cookie::get($cookieName)) {
            $berita->increment('views');
            Cookie::queue($cookieName, true, 60 * 12); // Cookie valid for 12 hours
        }

        $relatedBeritas = Berita::where('id', '!=', $berita->id)->latest()->take(3)->get();
        return view('bacaberita', compact('berita', 'relatedBeritas'));
    }
}
