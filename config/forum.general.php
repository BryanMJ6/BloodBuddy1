<?php

return [

  /**Aqui se configura el valor de tiempo que tendra los temas antes de que se considere antiguo. Este
determina si un hilo se puede considerar nuevo o no leído para
cualquier usuario  */
    'old_thread_threshold' => '7 days',

   
/**Aqui se valida que se puedan eliminar respuestas en el foro de manera no permanente */
    'soft_deletes' => true,

/*Aqui se valida que las respuestas o mensajes sean visibles despues de haberlos eliminado.*/
    'display_trashed_posts' => true,

/**Aqui se valida la paginacion**/
    'pagination' => [
/**Aqui se valida cuantas categorias se pueden ver en la primera pagina**/
        'categories' => 2,
/**Aqui se valida cuantas Hilos se pueden ver en la primera pagina**/
        'threads' => 20,
/**Aqui se valida cuantas Publicaciones se pueden ver en la primera pagina**/
        'posts' => 20,
    ],

 
/*Aqui se valida que la caNtidad de letras en un titulo al crear una categoria.*/
    'validation' => [
/*la cantidad minima de letras en un titulo al crear una categoria es de 6 caracteres.*/
        'title_min' => 6,
/*la cantidad minima de letras en la descripcion al crear una categoria es de 6 caracteres.*/
        'content_min' => 6,
    ],

    /**'router' => [
        'prefix' => '/forum/api',
        'as' => 'forum.api.',
        'namespace' => '\TeamTeaTime\Forum\Http\Controllers\Api',
        'middleware' => ['api', 'auth:api'],
    ],/** */

];
