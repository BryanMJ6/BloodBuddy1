<?php

namespace App\Http\Controllers;

/**Aqui importamos el Modelo de UserAjustes que se encuentra dentro de la carpeta de models**/
use App\Models\UserAjustes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; /*Necesario para validar la seguridad*/
use Illuminate\Support\Facades\Hash; /*Necesario*/
use Illuminate\Support\Facades\DB; /*Necesario para el llamado de la BD*/

class UserAjustesController extends Controller
{

/**Aqui definimos la funcion de newpassword con la cual podremos hacer el cambio de una nueva contraseña**/
    public function NewPassword()
    {

/**Este es el nombre de nuestras vistas estas son las que contendran el formulario y las acciones **/
        return view('configurar_perfil_de_usuario');
        return view('Cambio_Contrasena');
    }

/**Aqui definimos la funcion de newpassword con la cual podremos hacer el cambio de la contraseña**/
    public function changePassword(Request $request)
    {

/**Aqui tomamos en cuenta los valores de el usuario que esta registrado**/
        $user=Auth::user();
/**Aqui tomamos en cuenta el valor de el id de el usuario registrado**/
        $userId=$user->id;
/**Aqui tomamos en valor de email de el usuario que se encuentra registrado**/
        $userEmail=$user->email;
/**Aqui tomamos en cuenta el valor de contraseña de el usuario que esta registrado**/
        $userPassword=$user->password;
    if($request->password_actual!="") {
       $PassActual=$request->password_actual;
       $NuewPass=$request->password;
       $confirPass=$request->confirm_password;
       $name=$request->name;

            /*Verificamos si la clave actual es igual a la clave del usuario en session*/
            if (Hash::check($request->password_actual, $userPassword)) {

                /*Validamos que tanto la 1 como la 2 clave sean iguales*/
                if ($NuewPass == $confirPass) {

                    /*Validamos que la clave no sea Menor o igual a 6 digitos*/
                    if (strlen($NuewPass) >= 7) {
                        $user->password = Hash::make($request->password);

                /**Usamos la tabla user que es de la cual tomaremos los valores de 
                   /**el nombre de usuario y la contraseña para poder cambiarlos**/
                        $sqlBD = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['password' => $user->password]);

/**Aqui esta una alerta o mensaje que se mostrara al Cambiar correctamente la contraseña*/
            return redirect()->back()->with('updateClave', 'Su clave fue cambiada correctamente.🔐');
                } else {
/**Aqui esta una alerta o mensaje que se mostrara al Ingresar las contraseñas requeridas
 * con 6 o menos digitos ya que el requerimiento minimo es 7*/
            return redirect()->back()->with('clavemenor', '⚠️Recuerde la clave debe ser mayor a 6 digitos.⚠️');
                    }
                } else {
/**Aqui esta una alerta o mensaje que se mostrara al Ingresar las contraseñas requeridas
 *diferentes ya que la contraseña nueva y la confirmacion deben ser iguales*/
            return redirect()->back()->with('claveIncorrecta', '⚠️Por favor verifique las claves no coinciden.⚠️');
                }
                  }else {
/**Aqui esta una alerta o mensaje que se mostrara al Ingresar la contraseña que el usuario tenga actual incorrecta*/
            return back()->withErrors(['password_actual' => '⚠️La Clave no Coincide con la clave ingresada antes⚠️']);
            }
        } else {
/**Aqui haremos el update de los datos hacia nuestra tabla de Users*/
            $name       = $request->name;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $user->id)
                ->update(['name' => $name]);
/**Aqui esta una alerta o mensaje que se mostrara al Cambiar Nuestro nombre*/
            return redirect()->back()->with('name','Su nombre fue cambiado correctamente.😀');;
        }
    }
}