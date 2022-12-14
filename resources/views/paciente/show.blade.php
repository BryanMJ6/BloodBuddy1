@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Soy:</strong>
                            {{ $paciente->soy }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $paciente->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $paciente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $paciente->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $paciente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Donante:</strong>
                            {{ $paciente->donante }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $paciente->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Sangre:</strong>
                            {{ $paciente->tipo_sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $paciente->dui }}
                        </div>
                        <div class="form-group">
                            <strong>Padecimiento:</strong>
                            {{ $paciente->padecimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
