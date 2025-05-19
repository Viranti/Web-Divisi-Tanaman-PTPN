<?php

namespace App\Models;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends BaseModel
{
    use HasFactory;
    protected $fillable = ['judulBerita', 'deskripsi', 'foto_path']; // Perbaikan: tambahkan 'foto_path'
}
