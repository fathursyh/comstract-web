<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|min:16|max:255',
            'slug' => 'required|max:255', 
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        Artikel::create($validasi);

        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::find($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = Artikel::find($id);
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:16|max:255',
            'slug' => 'required|max:255|unique:artikels,slug,' . $id,
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $artikel = Artikel::findOrFail($id);

        $artikel->update($validatedData);

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);

        $artikel->delete();

        return redirect()->route('artikel.index');
    }
}
