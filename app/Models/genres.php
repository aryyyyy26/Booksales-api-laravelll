<?php

namespace App\Models;

class genres
{
    public function index()
{
    $genres = [
        ['id' => 1, 'name' => 'Science Fiction'],
        ['id' => 2, 'name' => 'Fantasy'],
        ['id' => 3, 'name' => 'Mystery'],
        ['id' => 4, 'name' => 'Historical'],
        ['id' => 5, 'name' => 'Horror'],
    ];

    return view('genres.index', ['genres' => $genres]);
}
}
