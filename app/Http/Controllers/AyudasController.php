<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudasController extends Controller
{
    /**Esta es la funcion que nos llevara ala vista de  index de Ayuda**/
    public function index()
    {
    /**Aqui le decimos que nos retorne a la vista de ayuda**/
        return view('ayudas.index');
    }
}