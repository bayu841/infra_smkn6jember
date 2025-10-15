<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->query('category');
        $products = Product::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->latest()->paginate(10);

        return view('admin.products.index', compact('products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stock' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            // Store the image in 'storage/app/public/products' and get the path
            $path = $request->file('image')->store('products', 'public');
            $validatedData['image'] = 'storage/' . $path;
        }

        Product::create($validatedData);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image is optional on update
            'stock' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image) {
                // We need to convert the public path to a storage path
                $oldImagePath = str_replace('storage/', '', $product->image);
                Storage::disk('public')->delete($oldImagePath);
            }

            // Store the new image and update the path
            $path = $request->file('image')->store('products', 'public');
            $validatedData['image'] = 'storage/' . $path;
        }

        $product->update($validatedData);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete the product image from storage
        if ($product->image) {
            $imagePath = str_replace('storage/', '', $product->image);
            Storage::disk('public')->delete($imagePath);
        }

        // Delete the product from the database
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
