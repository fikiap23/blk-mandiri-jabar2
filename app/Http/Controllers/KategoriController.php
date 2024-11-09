<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.kategori', [
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return ($request);
        $validateData = $request->validate([
            'nama' => 'required',
            'slug' => 'required'
        ]);

        Kategori::create($validateData);
        return redirect('/dashboard/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('backend.editKategori', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'slug' => 'required'
        ]);

        Kategori::where('id', $kategori->id)->update($validateData);
        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
