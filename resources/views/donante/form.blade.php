
<link rel="stylesheet" href="/css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/normalize.css">
<div class="form-group textonegro">
    <div class="card-body textonegro">
        
    <h5 class="textonegro">
    <div class="select">
                Me Registro como
                <label id="soy" for="soy"></label>
                <div class="input-group mb-3">
                    <select id="soy" name="soy" class="form-control form-select servicio3" aria-label="Registrandome como">
                        <option>Donante</option>
                        <option>Paciente</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('nombres') }}
                {{ Form::text('nombres', $donante->nombres, ['class ' => 'form-control servicio3' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'ingresa tus nombres']) }}
                {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('apellidos') }}
                {{ Form::text('apellidos', $donante->apellidos, ['class' => 'form-control servicio3' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'ingresa tus apellidos']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('edad') }}
                {{ Form::text('edad', $donante->edad, ['class' => 'form-control servicio3' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'ingresa tu edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $donante->telefono, ['class' => 'form-control servicio3' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'ingresa tu telefono 00000000']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('email') }}
                {{ Form::text('email', $donante->email, ['class' => 'form-control servicio3' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'ingresa tu email']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="select">
                Soy donante de
                <label id="donante" for="donante"></label>
                <div class="input-group mb-3">
                    <select id="donante" name="donante" class="form-control form-select servicio3" aria-label="donante">
                        <option>Sangre</option>
                        <option>Plasma</option>
                        <option>Otro</option>
                    </select>
                </div>
            </div>
            <div class="select">
                Sexo
                <label id="sexo" for="sexo"></label>
                <div class="input-group mb-3">
                    <select id="sexo" name="sexo" class="form-control form-select servicio3" aria-label="ingresa tu sexo">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>
            <div class="select">
                Tipo de Sangre
                <label id="tipo_sangre" for="tipo_sangre"></label>
                <div class="input-group mb-3">
                    <select id="tipo_sangre" name="tipo_sangre" class="form-control form-select servicio3"
                        aria-label="tipo_sangre">
                        <option class="text-danger">A+</option>
                        <option class="text-danger">B+</option>
                        <option class="text-danger">AB+</option>
                        <option class="text-danger">AB-</option>
                        <option class="text-danger">A-</option>
                        <option class="text-danger">B-</option>
                        <option class="text-danger">O+</option>
                        <option class="text-danger">O-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('dui') }}
                {{ Form::text('dui', $donante->dui, ['class' => 'form-control servicio3' . ($errors->has('dui') ? ' is-invalid' : ''),'placeholder' => 'Ingresa tu numero de dui 00000000-0', 'validate pattern=[0-9]{8}-[0-9]{1}']) }}
                {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('padecimiento') }}
                {{ Form::text('padecimiento', $donante->padecimiento, ['class' => 'form-control servicio3' . ($errors->has('padecimiento') ? ' is-invalid' : ''), 'placeholder' => 'algun padecimiento']) }}
                {!! $errors->first('padecimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </h5>

    </div>

    <div class="box-footer mt20 ">
        <button type="submit" class="btn btn-danger textonegro colorrojo">Registrarme</button>
        <a class="btn btn-dark textonegro" href="{{route('home')}}">Ya estoy registrado volver a inicio</a>
    </div>
</div>