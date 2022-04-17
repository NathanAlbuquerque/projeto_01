<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosselController extends Controller
{
    public function principal()
    {
        $tipo_de_oculos = array("azul", "charme", "laranja", "marron", "preto", "verde");

        return view('carrossel', ['tipos' => $tipo_de_oculos]);
    }
}
