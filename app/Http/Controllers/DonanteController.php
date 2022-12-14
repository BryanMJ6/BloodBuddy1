<?php

namespace App\Http\Controllers;

use App\Donante;
use Illuminate\Http\Request;

class DonanteController extends Controller
{

/**Aqui tenemos todos los metodos que utilisaremos con nuestra apartado de donantes**/
    
/**Aqui esta la funcion Index esta funcion al registrarnos en el formulario de donante
 /*Nos redigira a la pagina donantex.index donde se nos mostrara unos pequeños/
  /*registros de las ultimas personas que se han registrado en el formulario**/

    public function index()
    {
        $donantes = Donante::paginate();

        return view('donante.index', compact('donantes'))
            ->with('i', (request()->input('page', 1) - 0) * $donantes->perPage());
    }


/**Esta es la funcion que utlisaremos para el acceder al registro de donante**/
    public function create()
    {
        $donante = new Donante();
        return view('donante.create', compact('donante'));
    }


/**Esta funcion nos sirve para actualizar un registro especifico pero en este
 /*momento nosotros la hemos desabilitado ya que no la usaremos*/
    public function store(Request $request)
    {
        request()->validate(Donante::$rules);

        $donante = Donante::create($request->all());

        return redirect()->route('donantes.index')

/**Aqui esta una alerta o mensaje que se mostrara al registrarse en el registro de donante
 /*y no haya redirigido a donantes donde podremos ver las ultimas personas registradas*/

        ->with('success', '🙌Muchas gracias por haberte registrado.📑');
    }

 
/**Esta funcion nos sirve para ver la informacion de un registro especifico pero en este/
 * momento nosotros la hemos desabilitado ya que no la usaremos**/ 
    public function show($id)
    {
        $donante = Donante::find($id);

        return view('donante.show', compact('donante'));
    }


/**Esta funcion nos sirve para editar un registro especifico pero en este
/*momento nosotros la hemos desabilitado ya que no la usaremos**/
    public function edit($id)
    {
        $donante = Donante::find($id);

        return view('donante.edit', compact('donante'));
    }


/**Esta funcion nos sirve para actualizar un registro especifico reemplazamos los campos con los valores pasados/
/*en la variable $request, seguidamente*/
/*con el método save() actualizamos la información en la tabla**/
    public function update(Request $request, Donante $donante)
    {
        request()->validate(Donante::$rules);

        $donante->update($request->all());

        return redirect()->route('donantes.index')
/*Aqui esta una alerta o mensaje que se mostrara al actualizar la informacion de un registro especifico*/
 /*pero en este caso no se mostrara ya que se no usaremos la funcion de update*/

        ->with('success', 'Donante Actualizado con Exito');
    }


/**Esta funcion sirve para borrar un registro especifico pero en este caso no la estamos utilizano**/
    public function destroy($id)
    {
        $donante = Donante::find($id)->delete();

        return redirect()->route('donantes.index')
            ->with('success', 'Donante Eliminado con Exito');
    }
}
