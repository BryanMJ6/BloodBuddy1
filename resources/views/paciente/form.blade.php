<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('soy') }}
            {{ Form::text('soy', $paciente->soy, ['class' => 'form-control' . ($errors->has('soy') ? ' is-invalid' : ''), 'placeholder' => 'Soy']) }}
            {!! $errors->first('soy', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $paciente->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $paciente->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $paciente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('donante') }}
            {{ Form::text('donante', $paciente->donante, ['class' => 'form-control' . ($errors->has('donante') ? ' is-invalid' : ''), 'placeholder' => 'Donante']) }}
            {!! $errors->first('donante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $paciente->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre') }}
            {{ Form::text('tipo_sangre', $paciente->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Sangre']) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dui') }}
            {{ Form::text('dui', $paciente->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('padecimiento') }}
            {{ Form::text('padecimiento', $paciente->padecimiento, ['class' => 'form-control' . ($errors->has('padecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Padecimiento']) }}
            {!! $errors->first('padecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>