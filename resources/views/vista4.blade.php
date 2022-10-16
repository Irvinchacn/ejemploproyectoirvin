@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Celulares') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('está vinculada a aquello perteneciente o relativo a las células. El término célula, por su parte, tiene tres grandes significados: se trata de la unidad fundamental de los organismos vivos, que tiene
                         capacidad de reproducción independiente; del grupo de personas que funcionan de forma independiente dentro de una organización; y de la pequeña cavidad o celda...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection