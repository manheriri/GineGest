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
                            {!! Form::number('motherWeigth',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalWeigth', 'Peso del feto') !!}
                            {!! Form::number('fetalWeigth',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gestationWeek', 'Semana de gestación') !!}
                            {!! Form::number('gestationWeek',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fetalGender', 'Sexo del feto') !!}
                            {!! Form::select('fetalGender',['boy'=>'Niño','girl'=>'Niña'], ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fundalHeight', 'Altura cuello uterino') !!}
                            {!! Form::text('fundalHeight',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('streptococoAgalacitae', 'streptococo') !!}
                            {!! Form::select('streptococoAgalacitae',['0'=>'No','1'=>'Si'], ['class' => 'form-control'])!!}
                       </div>
                       <div class="form-group">
                           {!! Form::label('allergy', 'Alergias') !!}
                            {!! Form::text('allergy',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('smoker', 'Fumador') !!}
                            {!! Form::select('smoker',['0'=>'No','1'=>'Si'], ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('drunker', 'Bebedor') !!}
                            {!! Form::select('drunker',['0'=>'No','1'=>'Si'], ['class' => 'form-control'])!!}
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
                            <input type="datetime-local" id="menarquia" name="menarquia" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />

                        <div class="form-group">
                            {!!Form::label('finalization', 'Tipo de finalizacion') !!}
                            <br>
                            {!! Form::select('finalization',['partoNatural'=>'Parto natural','partoVaginalInstrumental'=>'Paro vaniganl','partoAbdominal'=>'Parto abdominal','abortoEspontaneo'=>'Aborto espontáneo','abortoInducido'=>'Aborto inducido','abortoIndirecto'=>'Aborto indirecto'], ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('background', 'Antecedentes') !!}
                            {!! Form::text('background',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('amniocentesis', 'Amniocentesis') !!}
                            {!! Form::text('amniocentesis',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                            <div class="form-group">
                                {!! Form::label('paciente_id', 'Paciente') !!}
                                {!! Form::select('paciente_id',$pacientes, ['class' => 'form-control'])!!}
                            </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
