@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Accion') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Originado en el vocablo en latín actio, el concepto de acción se refiere a 
                        dejar de tener un rol pasivo para pasar a hacer algo o bien a la consecuencia de esa actividad...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection