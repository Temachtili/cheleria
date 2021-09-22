@extends('layouts.app')

@section('template_title')
    {{ $chela->name ?? 'Show Chela' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Chela</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chelas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $chela->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $chela->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $chela->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $chela->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $chela->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Alcohol:</strong>
                            {{ $chela->alcohol }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
