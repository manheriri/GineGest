@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->userType=='paciente')
                        Ahora puede solicitar ayuda a nuestros profesionales.
                            Utilice el menú para navegar por la aplicación.
                        @endif
                        @if(Auth::user()->userType=='personalSanitario')
                            Ahora puede gestionar sus consultas y a sus pacientes.
                            Utilice el menú para navegar por la aplicación.
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
