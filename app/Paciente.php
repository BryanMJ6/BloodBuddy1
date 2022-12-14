<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
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
class Paciente extends Model
{
    
    static $rules = [
		'soy' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'edad' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'donante' => 'required',
		'sexo' => 'required',
		'tipo_sangre' => 'required',
		'dui' => 'required',
		'padecimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['soy','nombres','apellidos','edad','telefono','email','donante','sexo','tipo_sangre','dui','padecimiento'];



}
