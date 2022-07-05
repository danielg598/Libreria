@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? 'Show Prestamo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docsuscriptor:</strong>
                            {{ $prestamo->docsuscriptor }}
                        </div>
                        <div class="form-group">
                            <strong>Codigolibro:</strong>
                            {{ $prestamo->codigolibro }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaprestamo:</strong>
                            {{ $prestamo->fechaPrestamo }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadevolucion:</strong>
                            {{ $prestamo->fechaDevolucion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
