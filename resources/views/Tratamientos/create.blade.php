@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'tratamientos.store']) !!}

                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Paciente') !!}
                            {!! Form::select('paciente_id',$pacientes, ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('commonName', 'Nombre común') !!}
                            {!! Form::text('commonName',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('ReproductiveTreatmentType', 'Tipo de tratamiento reproductivo') !!}
                            {!! Form::select('ReproductiveTreatmentType',['FIV-ICSI'=>'FIV-ICSI','ROPA'=>'ROPA','estimulaciónOvárica'=>'Estimulación Ovárica','inseminaciónArtificial'=>'Inseminación Artificial'], ['class' => 'form-control'])!!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
