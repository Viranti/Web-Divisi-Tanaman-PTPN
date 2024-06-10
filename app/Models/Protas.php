<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protas extends Model
{
    use HasFactory;

    protected $fillable = ['namaDokumen', 'document', 'id_kebun'];
}

