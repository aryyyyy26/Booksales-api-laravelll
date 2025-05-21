<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = [
            ['id' => 1, 'name' => 'Agatha Christie'],
            ['id' => 2, 'name' => 'J.K. Rowling'],
            ['id' => 3, 'name' => 'Stephen King'],
            ['id' => 4, 'name' => 'George Orwell'],
            ['id' => 5, 'name' => 'Tere Liye'],
        ];

        return response()->json($authors);
    }
}
