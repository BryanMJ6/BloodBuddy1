<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Donante
 *
 * @property $id
 * @property $soy
 * @property $nombres
 * @property $apellidos
 * @property $edad
 * @property $telefono
 * @property $email
 * @property $donante
 * @property $sexo
 * @property $tipo_sangre
 * @property $dui
 * @property $padecimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Donante extends Model
{

	/**Aqui validamos algunas reglas de todos elementos que contendra la tabla de donantes**/
	static $rules = [

		/**La opcion soy es Obligatoria de ingresar**/
		'soy' => 'required',

		/**La opcion Nombres es Obligatoria de ingresar**/
		'nombres' => 'required',

		/**La opcion Apellidos es Obligatoria de ingresar**/
		'apellidos' => 'required',

		/**La opcion Edad es Obligatoria de ingresar**/
		'edad' => 'required',

		/**La opcion Telefono es Obligatoria de ingresar ademas se requieren 8 digitos
		 * Y el numero debe de ser unico que no haya sido registrado antes**/
		'telefono' => 'required|digits:8|unique:donantes',

		/**La opcion Email es Obligatoria de ingresar ademas de que el corre tiene que ser unico
		 * No se puede utilizar un correo ya registrado antes**/
		'email' => 'required|email|unique:donantes',

		/**La opcion Donante es Obligatoria de ingresar**/
		'donante' => 'required',

		/**La opcion Sexo es Obligatoria de ingresar**/
		'sexo' => 'required',

		/**La opcion Tipo de Sangre es Obligatoria**/
		'tipo_sangre' => 'required',

		/**La opcion Dui es Obligatoria de ingresar y ademas debe de ser unico**/
		'dui' => 'required|unique:donantes',

		/**La opcion Padecimiento es Obligatoria de ingresar**/
		'padecimiento' => 'required',
	];
	/**Aqui le decimos que nos muestre los registros por 4 cada pagina*/
	protected $perPage = 2;


	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['soy', 'nombres', 'apellidos', 'edad', 'telefono', 'email', 'donante', 'sexo', 'tipo_sangre', 'dui', 'padecimiento'];
}