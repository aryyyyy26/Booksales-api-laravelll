<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HashFactory;
use illuminate\Database\Eloquent\Model;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Agatha Christie'],
            ['id' => 2, 'name' => 'J.K. Rowling'],
            ['id' => 3, 'name' => 'Stephen King'],
            ['id' => 4, 'name' => 'George Orwell'],
            ['id' => 5, 'name' => 'Tere Liye'],
        ];
    }
}
