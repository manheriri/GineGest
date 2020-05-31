@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Embarazo</div>

                    <div class="panel-body">
                        <div class="row-cols-6"> <span>Sexo del feto:</span> {{$pregnancies->fetalGender}}</div>
                        <div class="row-cols-6"> <span>Peso fetal:</span> {{$pregnancies->fetalWeigth}}</div>
                        <div class="row-cols-6"> <span>Streptococo Agalacitae:</span> {{$pregnancies->streptococoAgalacitae}}</div>
                        <div class="row-cols-6"> <span>Altura del cuello uterino:</span> {{$pregnancies->fundalHeight}}</div>
                        <div class="row-cols-6"> <span>Semana de gestación:</span> {{$pregnancies->gestationWeek}}</div>
                        <div class="row-cols-6"> <span>Amniocentesis:</span> {{$pregnancies->amniocentesis}}</div>
                        @if( 'userType'=='personalSanitario')
                        <div>
                            {!! Form::open(['route' => ['embarazos.edit',$pregnancies->id], 'method' => 'get']) !!}
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
