<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    
/**Este es el nombre de el controlador**/
    use ConfirmsPasswords;

    
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /**Aqui se hace la validacion de si se encuentra registrado el usario**/
    public function __construct()
    {
        $this->middleware('auth');
    }
}
