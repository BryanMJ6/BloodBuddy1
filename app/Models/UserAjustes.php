<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserAjustes extends Model
{


    use HasFactory;
    /**Se validan los valores de El apartado de mi perfil**/
    public $fillable = ['password_actual', 'password', 'confirm_password'];
}