@extends('layouts.app')

@section('template_title')
Donante
@endsection
@section('content')
<link rel="stylesheet" href="/css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/normalize.css">
<br><br><br>
</div>
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card order-card">
            <div class="card-header texto textonegro">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <span id="card_title" class="texto textonegro">
                        {{ __('Detalles de ultimas personas Registradas') }}
                    </span>

                </div>
            </div>
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card-body bg-light bg-opacity-100">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                    <caption>Descripcion de los ultimos registrados</caption>
                        <thead class="thead">
                            <tr>
                                <th>Soy un</th>
                                <th>Nombres</th>
                                <th>Edad</th>
                                <th>Donante</th>
                                <th>Sexo</th>
                                <th>Tipo Sangre</th>
                                <th>Padecimiento</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donantes as $donante)
                            <tr>
                                <td class="text-danger"><h5>{{ $donante->soy }}</h5></td>
                                <td>{{ $donante->nombres }}</td>
                                <td>{{ $donante->edad }}</td>
                                <td>{{ $donante->donante }}</td>
                                <td>{{ $donante->sexo }}</td>
                                <td class="text-danger"><h5>{{ $donante->tipo_sangre }}</h5></td>
                                <td>{{ $donante->padecimiento }}</td>

                                <td>
                                    
                                    <form action="{{ route('donantes.destroy',$donante->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                </td>
                            </tr> 
                            @endforeach
                            <div class="row content-center">
                                <h4>
                                    Hola🖐
                                    <h2 class="text-danger">

                                    </h2>

                                    <h4>
                                        🎉¡Muchas gracias por haberte registrado!🎉 
                                        <h4>Aqui esta la lista de las ultimas Personas Registradas<h4>
                                                <h4>
                                                    <a class="btn btn-danger textonegro colorrojo" href="{{route('home')}}">Regresar a Inicio</a>                         
                        </form>                              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $donantes->links() !!}
    </div>

</div>
</div>

@endsection