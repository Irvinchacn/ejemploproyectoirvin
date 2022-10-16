@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tablets') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Una tablet, en definitiva, es una computadora (ordenador) portátil más grande que un smartphone pero, generalmente, más pequeña que una netbook. 
                        Se caracteriza por contar con pantalla táctil: esto quiere decir que para utilizar la tablet no se necesita mouse (ratón) ni teclado...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection