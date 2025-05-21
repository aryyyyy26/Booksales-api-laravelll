<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];  // atribut yang bisa diisi massal
    public $timestamps = false;      // jika tidak pakai created_at & updated_at
}
