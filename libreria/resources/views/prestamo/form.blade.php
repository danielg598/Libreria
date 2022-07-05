<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docsuscriptor') }}
            {{ Form::text('docsuscriptor', $prestamo->docsuscriptor, ['class' => 'form-control' . ($errors->has('docsuscriptor') ? ' is-invalid' : ''), 'placeholder' => 'Docsuscriptor']) }}
            {!! $errors->first('docsuscriptor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigolibro') }}
            {{ Form::text('codigolibro', $prestamo->codigolibro, ['class' => 'form-control' . ($errors->has('codigolibro') ? ' is-invalid' : ''), 'placeholder' => 'Codigolibro']) }}
            {!! $errors->first('codigolibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaPrestamo') }}
            {{ Form::date('fechaPrestamo', $prestamo->fechaPrestamo, ['class' => 'form-control' . ($errors->has('fechaPrestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fechaprestamo']) }}
            {!! $errors->first('fechaPrestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaDevolucion') }}
            {{ Form::date('fechaDevolucion', $prestamo->fechaDevolucion, ['class' => 'form-control' . ($errors->has('fechaDevolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fechadevolucion']) }}
            {!! $errors->first('fechaDevolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>