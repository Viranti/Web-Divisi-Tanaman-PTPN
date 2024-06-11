<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raystat extends Model
{
    use HasFactory;
    
    protected $fillable = ['namaDokumen', 'document','id_kebun'];
}
