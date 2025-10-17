<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Berita::with('categories')->latest();

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category') && $request->category != '') {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('id', $request->category);
            });
        }

        $beritas = $query->paginate(10)->withQueryString();

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.berita.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'description' => 'required|min:10',
            'content' => 'required|min:10',
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'categories' => 'nullable|array'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/berita', $image->hashName());

        $berita = Berita::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'description' => $request->description,
            'content'   => $request->content
        ]);

        // Sync categories
        if ($request->has('categories')) {
            $categoryIds = [];
            foreach ($request->categories as $categoryName) {
                $category = Category::firstOrCreate(['name' => $categoryName]);
                $categoryIds[] = $category->id;
            }
            $berita->categories()->sync($categoryIds);
        }

        return redirect()->route('admin.news.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $news)
    {
        $news->load('categories');
        return view('admin.berita.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $news)
    {
        $categories = Category::all();
        return view('admin.berita.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $news)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'description' => 'required|min:10',
            'content' => 'required|min:10',
            'image'   => 'image|mimes:jpeg,jpg,png|max:2048',
            'categories' => 'nullable|array'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/berita', $image->hashName());

            Storage::delete('public/berita/'.$news->image);

            $news->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'description' => $request->description,
                'content'   => $request->content
            ]);
        } else {
            $news->update([
                'title'     => $request->title,
                'description' => $request->description,
                'content'   => $request->content
            ]);
        }

        // Sync categories
        if ($request->has('categories')) {
            $categoryIds = [];
            foreach ($request->categories as $categoryName) {
                $category = Category::firstOrCreate(['name' => $categoryName]);
                $categoryIds[] = $category->id;
            }
            $news->categories()->sync($categoryIds);
        } else {
            $news->categories()->detach(); // Detach all if no categories are selected
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

    public function destroyMultiple(Request $request)
    {
        $request->validate([
            'selected_news' => 'required|array',
        ]);

        $beritas = Berita::whereIn('id', $request->selected_news)->get();

        foreach ($beritas as $berita) {
            Storage::delete('public/berita/'.$berita->image);
            $berita->delete();
        }

        return redirect()->route('admin.news.index')->with('success', 'Berita yang dipilih berhasil dihapus.');
    }
}
