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
                            {!! Form::label('motherWeigth', 'Peso materno') !!}
                            {!! Form::text('motherWeigth',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalWeigth', 'Peso del feto') !!}
                            {!! Form::text('fetalWeigth',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gestationalWeek', 'Semana de gestación') !!}
                            {!! Form::text('gestationalWeek',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalGender', 'Sexo del feto') !!}
                            {!! Form::text('fetalGender',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fundalHeigth', 'Altura cuello uterino') !!}
                            {!! Form::text('fundalHeigth',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('streptococoAgalacitae', 'streptococo') !!}
                            {!! Form::text('streptococoAgalacitae',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('allergy', 'Alergias') !!}
                            {!! Form::text('allergy',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('smoker', 'Fumador') !!}
                            {!! Form::text('smoker',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('drunker', 'Bebedor') !!}
                            {!! Form::text('drunker',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('bloodType', 'Grupo sanguíneo') !!}
                            {!! Form::text('bloodType',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('symptom', 'Síntomas') !!}
                            {!! Form::text('symptom',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('menarquia', 'Menarquía') !!}
                            {!! Form::text('menarquia',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('finalization', 'Tipo de finalización') !!}
                            {!! Form::text('finalization',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('background', 'bg') !!}
                            {!! Form::text('background',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('amniocentesis', 'Amniocentesis') !!}
                            {!! Form::text('amniocentesis',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
