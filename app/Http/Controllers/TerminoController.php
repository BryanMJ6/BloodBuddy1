<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminoController extends Controller
{
    public function index()
    {
        return view('terminos.index');
    }
}
