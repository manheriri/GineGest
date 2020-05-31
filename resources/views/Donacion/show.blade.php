@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Resultados</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>VALIDEZ:</span> {{$results->isValid}}</div>
                        <div class="row-cols-6"> <span>Análisis de sangre:</span> {{$results->analisisSangre}}</div>
                        <div class="row-cols-6"> <span>Análisis de orina:</span> {{$results->analisisOrina}}</div>
                        @if('generoDonante'=='masculino')
                        <div class="row-cols-6"> <span>Prueba urológica:</span> {{$results->pruebaUrologica}}</div>
                        @else
                        <div class="row-cols-6"> <span>Prueba ginecológica:</span> {{$results->pruebaGinecologica}}</div>
                        @endif
                        <div class="row-cols-6"> <span>Test psicológico:</span> {{$results->testPsicologico}}</div>
                        <div class="row-cols-6"> <span>Comentarios:</span> {{$results->comments}}</div>
                        @if( 'userType'=='personalSanitario')
                            <div>
                                {!! Form::open(['route' => ['donacion.edit',$results->id], 'method' => 'get']) !!}
                                {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                {!! Form::close() !!}
                            </div> @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
