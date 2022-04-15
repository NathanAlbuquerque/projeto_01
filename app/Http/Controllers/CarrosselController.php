<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosselController extends Controller
{
    public function principal()
    {
        return view('carrossel');
    }
}
