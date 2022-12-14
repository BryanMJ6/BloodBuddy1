<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    /**Aqui validamos que el usuario se registre antes de acceder a la siguiente pantalla**/
    public function __construct()
    {
        $this->middleware(['auth',/*'verified'/** */]);
    }

    /**Aqui le decimos Que nos redirija a la pantalla Home luego de que se haya iniciado sesion
     * ya que esto se valido arriba **/
    public function index()
    {
        return view('home');
    }
}
