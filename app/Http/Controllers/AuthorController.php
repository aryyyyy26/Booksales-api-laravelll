<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Menampilkan semua data author (Read All)
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    // Menambahkan data author baru (Create)
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $author = Author::create($validated);

        // Kembalikan response JSON dengan status 201 Created
        return response()->json($author, 201);
    }
}
