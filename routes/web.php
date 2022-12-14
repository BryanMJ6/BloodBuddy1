<?php

/**Aqui estamos utilizando el controlador de nuestra opcion de mi perfil ya que en el se encuentran
todos los metodos**/

use App\Http\Controllers\UserAjustesController;

use Illuminate\Support\Facades\Route;

/**Esta es la ruta de inicio la cual se llama Welcomeblade esta ruta
 * se muestra al ingresar**/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    /**'verify'=>true/** */
]);

/**Estas son las rutas para acceder al apartado de mi perfil son dos rutas ya que una hace reerencia a
 * una nueva contraseña mientras que la otra a un cambio de contraseña**/
/**Aqui tambien le decimos que verifique si el usuario este logea y si es asi le permita acceder a esta
 * rutas protegidas el "middleware" 'auth' sirve ´para proteger la ruta y connceder el acceso
 * solo al usuario que este logeado **/
Route::get('/NewPassword',  [UserAjustesController::class, 'NewPassword'])->name('NewPassword')->middleware('auth',/*verified'/** */);
Route::post('/change/password',  [UserAjustesController::class, 'changePassword'])->name('changePassword');



/**Esta es la ruta de nuestro ChatBot**/
/**Esta llama a la funcion handle que esta dentro de el controlador BotmanController
 * el cual tiene todo el chat de nuestro chatbot**/
Route::match(['get', 'post'], '/botman', [\App\Http\Controllers\BotmanController::class, 'handle']);

/**Esta es la ruta de nuestra seccion de contactos**/
/**es de tipo resource ya que esta dentro de una carpeta llamada contactos**/
Route::resource('contacts', App\Http\Controllers\ContactController::class);

/**Esta es la ruta de nuestra seccion de Ayuda**/
/**es de tipo resource ya que esta dentro de una carpeta llamada contactos**/
Route::resource('ayudas', App\Http\Controllers\AyudasController::class);

/**Esta es la ruta de nuestra seccion de Nosotros**/
/**es de tipo resource ya que esta dentro de una carpeta llamada equipos**/
Route::resource('equipos', App\Http\Controllers\EquiposController::class);

/**Esta es la ruta de nuestra seccion de Terminos**/
/**es de tipo resource ya que esta dentro de una carpeta llamada terminos**/
Route::resource('terminos', App\Http\Controllers\TerminoController::class);

/**Esta es la ruta de nuestra seccion de Mas Informacion**/
/**es de tipo resource ya que esta dentro de una carpeta llamada extras**/
Route::resource('infoextras', App\Http\Controllers\InfoExtraController::class);

/**Esta es la ruta de nuestro formulario de donantes**/
/**es de tipo resource ya que esta dentro de una carpeta llamada donantes**/
Route::resource('donantes', App\Http\Controllers\DonanteController::class)->middleware('auth');

/**'verified'**/

/**Esta es la ruta de Home que se nos muestra al Iniciar Sesion */
/**Aqui tambien le decimos que cuando el usuario inicie sesion lo redirija a la ruta home**/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/**->middleware('auth','verified')/** */