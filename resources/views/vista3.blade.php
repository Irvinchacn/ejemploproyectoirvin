@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deportes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('es donde encontramos el origen etimológico de la palabra deporte y en concreto se halla
                         en el verbo deportare que puede traducirse como deportar. Viéndolo así nos cuesta entender qué tienen en común 
                         dicho verbo y el concepto que nos ocupa, sin embargo, tenemos que decir que la evolución será la que determine la conexión...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection