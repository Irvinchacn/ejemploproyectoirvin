@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Computadora') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('La computadora requiere de programas informáticos (software) que aportan datos específicos, necesarios para el procesamiento de información.
                         Una vez obtenida la información deseada, ésta puede ser utilizada internamente o transferida a otra computadora o componente electrónico...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection