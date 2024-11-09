<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return (Artikel::all());
        return view('backend.artikel', [
            'artikels' => Artikel::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create', [
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return ($request);
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:artikels',
            'kategori_id' => 'required',
            'gambar' => 'image|file|max:2048',
            'sumber_gambar' => '',
            'body' => 'required',
            'sumber' => '',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('gambar-artikel', 'public');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Artikel::create($validateData);

        return redirect('/dashboard/artikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('backend.show', [
            'artikel' => $artikel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        // return ($artikel);
        return view('backend.edit', [
            'artikel' => $artikel,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'gambar' => 'image|file|max:2048',
            'sumber_gambar' => '',
            'body' => 'required',
            'sumber' => '',
        ];

        if ($request->slug != $artikel->slug) {
            $rules['slug'] = 'required|unique:artikels';
        }

        $validateData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $validateData['gambar'] = $request->file('gambar')->store('gambar-artikel', 'public');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Artikel::where('id', $artikel->id)->update($validateData);

        return redirect('/dashboard/artikel')->with('success', 'Artikel berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {

        if ($artikel->gambar) {
            Storage::delete($artikel->gambar);
        }
        Artikel::destroy($artikel->id);

        return redirect('/dashboard/artikel')->with('danger', 'Artikel berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
