<!--Aqui Usamos la barra de navegacion de nuestro Layout-->
@extends('layouts.app')

<!--Aqui esta el Nombre de esta seccion o Pantalla-->
@section('template_title')
Donante
@endsection

<!--Aqui mostramos todo el contenido de la pantalla de contactos con el section('content')-->
@section('content')

<!--Aui estan los estilos-->
<link rel="stylesheet" href="/css/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/estilos.css">

<!---->
<br><br><br>

<!--Aqui creamos un contenedor aliniado al centro-->
<div class="container order-card" align="center">
<div class="row justify-content-center">
 <div class="col-md-8 servicio ">
    <div class="card card col-md-12">

    @includeif('partials.errors')

<!--Creamos el diseño de el formulario-->

<h2 class="card-header servicio3 texto textonegro">Registro de Donante</h2>
<!--Aqui ira el titulo de el formulario de un color Blanco-->
<div class="card-body servicio3">
    <form method="POST" action="{{ route('donantes.store') }}" role="form"enctype="multipart/form-data">
    @csrf
    @include('donante.form')
    </form>
</div>
</div>
</div>
</div>

</section>
@endsection