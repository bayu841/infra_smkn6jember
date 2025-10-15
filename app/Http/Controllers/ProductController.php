<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductController extends \App\Http\Controllers\Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        try {
            $recommendedProducts = Product::where('id', '!=', $product->id)
                                        ->where('category', $product->category)
                                        ->inRandomOrder()
                                        ->limit(4)
                                        ->get();
            return view('product.detail', compact('product', 'recommendedProducts'));
        } catch (\Exception $e) {
            \Log::error('Error in ProductController@show: ' . $e->getMessage());
            return redirect('/')->withErrors('An error occurred while loading product details.');
        }
    }
}
