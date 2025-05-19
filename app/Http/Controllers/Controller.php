<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    abstract public function index();
    abstract public function create();
    abstract public function show(string $id);
    abstract public function edit(string $id);
    abstract public function destroy(string $id);

}
