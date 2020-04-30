@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Observaciones: {{$observation->paciente_id}}</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Peso materno:</span> {{$observation->motherWeigth}}</div>
                        <div class="row-cols-6"> <span>Peso fetal:</span> {{$observation->fetalWeigth}}</div>
                        <div class="row-cols-6"> <span>Semana de gestación:</span> {{$observation->gestationalWeek}}</div>
                        <div class="row-cols-6"> <span>Sexo del feto:</span> {{$observation->fetalGender}}</div>
                        <div class="row-cols-6"> <span>Altura del cuello uterino:</span> {{$observation->fundalHeigth}}</div>
                        <div class="row-cols-6"> <span>Streptococo:</span> {{$observation->streptococoAgalacitae}}</div>
                        <div class="row-cols-6"> <span>Alergias:</span> {{$observation->allergy}}</div>
                        <div class="row-cols-6"> <span>Fumador:</span> {{$observation->smoker}}</div>
                        <div class="row-cols-6"> <span>Bebedor:</span> {{$observation->drunker}}</div>
                        <div class="row-cols-6"> <span>Grupo sanguíneo:</span> {{$observation->bloodType}}</div>
                        <div class="row-cols-6"> <span>Síntomas:</span> {{$observation->symptom}}</div>
                        <div class="row-cols-6"> <span>Fecha mestruación:</span> {{$observation->menarquia}}</div>
                        <div class="row-cols-6"> <span>Tipo de finalización del parto:</span> {{$observation->finalization}}</div>
                        <div class="row-cols-6"> <span>Background:</span> {{$observation->background}}</div>
                        <div class="row-cols-6"> <span>Amniocentesis:</span> {{$observation->amniocentesis}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
