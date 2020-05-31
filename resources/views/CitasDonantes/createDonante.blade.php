@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Cita</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'storeCitaDonante']) !!}

                        <div class="form-group">
                            {!! Form::label('personalSanitario_id', 'Médico') !!}
                            {!! Form::select('personalSanitario_id',$personalSanitario, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaCita', 'Fecha de la cita') !!}
                            <input type="datetime-local" id="fechaCita" name="fechaCita" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>

                        <div class="form-group">
                            {!! Form::label('reason', 'Motivo') !!}
                            {!! Form::text('reason',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
