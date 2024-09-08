<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Handle storing a new article.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $slug = Str::slug($request->input('title'));

        $artikelData = [
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'slug' => $slug,
            'excerpt' => $request->input('excerpt'),
            'body' => $request->input('body'),
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $artikelData['image_path'] = $imagePath;
        }

        $artikel = Artikel::create($artikelData);

        return redirect()->route('');
    }
}
