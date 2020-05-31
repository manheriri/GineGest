@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles del tratamiento: {{$treatments->created_at}}</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Nombre común:</span> {{$treatments->commonName}}</div>
                        <div class="row-cols-6"> <span>Tipo de tratamiento:</span> {{$treatments->tipoDeTratamiento}}</div>

                        <div>
                            {!! Form::open(['route' => ['tratamientosPaciente',$treatments->id], 'method' => 'get']) !!}
                            {!!   Form::submit('Volver', ['class'=> 'btn btn-warning'])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
