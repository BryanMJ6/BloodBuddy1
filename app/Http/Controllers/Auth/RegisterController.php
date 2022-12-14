<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**Este es el nombre de el controlador que se utilizara para acceder a todos estos metodos*/
class RegisterController extends Controller
{
  

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;

/*Esta es la funcion que sirve para validar*/
    public function __construct()
    {
        $this->middleware('guest');
    }

  
/**Aqui validamos los campos de nuestra tabla de users**/
    protected function validator(array $data)
    {
        return Validator::make($data, [
/**La opcion name es Obligatoria de ingresa y el maximo de caracteres es de 255**/
            'name' => ['required', 'string', 'max:255'],
/**La opcion email es Obligatoria de ingresar y el maximo de caracteres es de 255 ademas de que no
 * tiene que haberce registrado antes ya que debe ser unico**/
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
/**La opcion password es Obligatoria de ingresar y tienen que ser minimo 8 caracteres ademas 
 * de que sera obligatorio confirmar la contraseña que se ingrese antes**/
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


/**Se llavan los valores que fueron ingresados antes una ves que se cumplan todos los requisitos
 * se crea el usuario**/
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
