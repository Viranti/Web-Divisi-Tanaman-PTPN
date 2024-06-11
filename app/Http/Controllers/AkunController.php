<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('client/beranda', compact('users'));
    }
}
