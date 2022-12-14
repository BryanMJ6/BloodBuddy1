<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**Este es el nombre de el controlador que se utilizara para acceder a todos estos metodos*/
class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    /**
     *  Esta es la ruta Donde se redirigira a los usuarios después de iniciar sesión.*/
    protected $redirectTo = RouteServiceProvider::HOME;

/*Esta es la funcion que sirve para validar Si el usuario esta en sesion pueda cerrarla*/
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
