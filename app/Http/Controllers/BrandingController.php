<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BrandingController extends Controller
{
    public function batikEnem()
    {
        $products = Product::where('category', 'batikenem')->get();
        return view('brandingsmk6.batikenem', compact('products'));
    }

    public function energiEnem()
    {
        $products = Product::where('category', 'energienem')->get();
        return view('brandingsmk6.energienem', compact('products'));
    }

    public function studioEnem()
    {
        $products = Product::where('category', 'studioenem')->get();
        return view('brandingsmk6.studioenem', compact('products'));
    }
}