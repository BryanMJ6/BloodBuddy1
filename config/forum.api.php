<?php

return [

  
    /*Aqui habilitamos la api de el foro ya que si ponemos false en lugar de true se desactivara*/
    'enable' => true,

    /*Aqui se habilita la busqueda.*/
    'enable_search' => true,

    /*Aqui se configura el  enrutador de la  API.*/
    'router' => [
        'prefix' => '/forum/api',
        'as' => 'forum.api.',
        'namespace' => '\TeamTeaTime\Forum\Http\Controllers\Api',
        'middleware' => ['api', 'auth:api'],
    ],

];
