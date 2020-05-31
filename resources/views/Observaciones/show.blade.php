@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Observación del: {{$observations->created_at}}</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Síntomas:</span> {{$observations->symptom}}</div>
                        <div class="row-cols-6"> <span>Comentarios:</span> {{$observations->comments}}</div>
                        <div>
                        {!! Form::open(['route' => ['observaciones.edit',$observations->id], 'method' => 'get']) !!}
                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
