@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Embarazo</div>

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
                            {!! Form::label('gestationWeek', 'Semana de gestación') !!}
                            {!! Form::number('gestationWeek',null,['class'=>'form-control', 'required|nullable', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalGender', 'Sexo del feto') !!}
                            {!! Form::select('fetalGender',[null,'Niño'=>'Niño','Niña'=>'Niña'], ['class' => 'form-control', 'required|nullable', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fundalHeight', 'Altura cuello uterino') !!}
                            {!! Form::text('fundalHeight',null,['class'=>'form-control', 'required|nullable', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('streptococoAgalacitae', 'streptococo') !!}
                            {!! Form::select('streptococoAgalacitae',['No'=>'No','Si'=>'Si','No detectectado por el momento'=>'No detectectado por el momento'], ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('amniocentesis', 'Amniocentesis') !!}
                            {!! Form::text('amniocentesis',null,['class'=>'form-control', 'required|nullable', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechaPrevista', 'Fecha prevista de parto') !!}
                            <input type="datetime-local" id="fechaPrevista" name="fechaPrevista" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechaFinal', 'Fecha de finalización') !!}
                            <input type="datetime-local" id="fechaFinal" name="fechaFinal" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!!Form::label('finalization', 'Tipo de finalizacion') !!}
                            {!! Form::select('finalization',[null,'Parto Natural'=>'Parto natural','Parto Vaginal Instrumental'=>'Parto vaginal Instrumental','Parto Abdominal'=>'Parto abdominal',
                            'Aborto Espontaneo'=>'Aborto espontáneo','Aborto Inducido'=>'Aborto inducido',
                            'Aborto Indirecto'=>'Aborto indirecto'], ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalWeigth', 'Peso del feto') !!}
                            {!! Form::number('fetalWeigth',null,['class'=>'form-control', 'required'|'nullable', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
