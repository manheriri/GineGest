@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Observación del: {{$observations->created_at}}</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Peso materno:</span> {{$observations->motherWeigth}}</div>
                        <div class="row-cols-6"> <span>Peso fetal:</span> {{$observations->fetalWeigth}}</div>
                        <div class="row-cols-6"> <span>Semana de gestación:</span> {{$observations->gestationalWeek}}</div>
                        <div class="row-cols-6"> <span>Sexo del feto:</span> {{$observations->fetalGender}}</div>
                        <div class="row-cols-6"> <span>Altura del cuello uterino:</span> {{$observations->fundalHeight}}</div>
                        <div class="row-cols-6"> <span>Streptococo:</span> {{$observations->streptococoAgalacitae}}</div>
                        <div class="row-cols-6"> <span>Alergias:</span> {{$observations->allergy}}</div>
                        <div class="row-cols-6"> <span>Fumador:</span> {{$observations->smoker}}</div>
                        <div class="row-cols-6"> <span>Bebedor:</span> {{$observations->drunker}}</div>
                        <div class="row-cols-6"> <span>Grupo sanguíneo:</span> {{$observations->bloodType}}</div>
                        <div class="row-cols-6"> <span>Síntomas:</span> {{$observations->symptom}}</div>
                        <div class="row-cols-6"> <span>Fecha mestruación:</span> {{$observations->menarquia}}</div>
                        <div class="row-cols-6"> <span>Tipo de finalización del parto:</span> {{$observations->finalization}}</div>
                        <div class="row-cols-6"> <span>Antecedentes:</span> {{$observations->background}}</div>
                        <div class="row-cols-6"> <span>Amniocentesis:</span> {{$observations->amniocentesis}}</div>
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
