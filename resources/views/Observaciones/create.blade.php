@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear observación</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'observaciones.store']) !!}

                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Paciente') !!}
                            {!! Form::select('paciente_id',$pacientes, ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('symptom', 'Síntomas') !!}
                            {!! Form::text('symptom',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('comments', 'Comentarios') !!}
                            {!! Form::text('comments',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>






                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
