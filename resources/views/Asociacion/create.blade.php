@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'asociacion.store']) !!}

                        {!! Form::hidden('treatment_id',$treatment->id,['class'=>'form-control', 'required']) !!}

                        <div class="form-group">
                            {!! Form::label('medicament_id', 'Medicamento') !!}
                            {!! Form::select('medicament_id',$medicaments, ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('instructions', 'Instrucciones') !!}
                            {!! Form::text('instructions',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('initialDate', 'Fecha de finalización') !!}
                            <input type="datetime-local" id="initialDate" name="initialDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>

                        <div class="form-group">
                            {!! Form::label('finalDate', 'Fecha de finalización') !!}
                            <input type="datetime-local" id="finalDate" name="finalDate" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
