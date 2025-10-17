<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Berita;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get();
        $tracerData = Data::all();
        $colors = [
            '#67e8f9',
            '#06b6d4',
            '#0891b2',
            '#0e7490',
            '#155e75',
            '#164e63',
        ];
        return view('home', compact('beritas', 'tracerData', 'colors'));
    }
}
