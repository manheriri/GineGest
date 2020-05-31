@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicación del tratamiento: {{$treatments->created_at}}</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Medicamentos:</span> {{$treatments->medicamentCommonName}}</div>
                        <div class="row-cols-6"> <span>Presentacion:</span> {{$treatments->medicamentPresentation}}</div>

                        <div>
                            {!! Form::open(['route' => ['tratamientosPersonal',$treatments->id], 'method' => 'get']) !!}
                            {!!   Form::submit('Volver', ['class'=> 'btn btn-warning'])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
