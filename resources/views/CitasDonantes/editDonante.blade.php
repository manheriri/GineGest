@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cita</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($appointments, [ 'route' => ['editarCitasPersonalDonante',$appointments->id], 'method'=>'PUT']) !!}


                        <div class="form-group">
                            {!! Form::label('fechaCita', 'Fecha de la cita') !!}
                            <input type="datetime-local" id="fechaCita" name="fechaCita" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />
                        </div>
                        <div class="form-group">
                            {!! Form::label('reason', 'Motivo') !!}
                            {!! Form::text('reason',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>



                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
