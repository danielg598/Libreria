@extends('layouts.app')

@section('template_title')
    {{ $suscriptore->name ?? 'Show Suscriptore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Suscriptore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscriptores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $suscriptore->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $suscriptore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $suscriptore->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
