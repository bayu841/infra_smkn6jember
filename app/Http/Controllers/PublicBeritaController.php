<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PublicBeritaController extends Controller
{
    public function index()
    {
        $lastPosts = Berita::latest()->take(3)->get();
        $popularNews = Berita::inRandomOrder()->take(3)->get();
        $beritas = Berita::latest()->paginate(6);

        return view('berita', compact('lastPosts', 'popularNews', 'beritas'));
    }

    public function show(Berita $berita)
    {
        $relatedBeritas = Berita::where('id', '!=', $berita->id)->latest()->take(3)->get();
        return view('bacaberita', compact('berita', 'relatedBeritas'));
    }
}
