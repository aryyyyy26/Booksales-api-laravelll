<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Jika model ini ingin menggunakan Eloquent, harus extend Model

    // Jika menggunakan database, pastikan table authors sudah ada
    
    // Jika ingin mass assignment, isi fillable:
    protected $fillable = ['name'];

    // Jika tidak ingin menggunakan timestamp (created_at, updated_at)
    public $timestamps = false;
}
