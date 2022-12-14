@extends('layouts.app')

@section('template_title')
Create Donante
@endsection

@section('content')
<br><br><br>
<div class="container" align="center">
    <div class="row justify-content "></div>
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default bg-danger p-2 text-dark bg-opacity-25">
                    <div class="card-header bg-danger text-white">
                        <h5><span class="card-title">Registro de Donante</span></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('donantes.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('donante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
