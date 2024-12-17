<?php

namespace App\Http\Controllers\Edica;

use App\Http\Controllers\Controller;

class EdicaController extends Controller
{
    public function __invoke()
    {
        return view('layouts.main');
    }
}
