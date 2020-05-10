@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Cita</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'embarazos.store']) !!}

                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Paciente') !!}
                            {!! Form::select('paciente_id',$paciente, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaInicio', 'Fecha de inicio del embarazo') !!}
                            <input type="datetime-local" id="fechaInicio" name="fechaInicio" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechaPrevista', 'Fecha prevista de parto') !!}
                            <input type="datetime-local" id="fechaPrevista" name="fechaPrevista" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechaFinal', 'Fecha de finalización') !!}
                            <input type="datetime-local" id="fechaFinal" name="fechaFinal" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
