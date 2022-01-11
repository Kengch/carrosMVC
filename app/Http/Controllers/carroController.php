<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carroController extends Controller
{
    public function __construct(){

    }

    public function lista(){
        return view('carro.carrosLista', array('carrosLista' => 'ADASDADSASDA'));
    }
}
