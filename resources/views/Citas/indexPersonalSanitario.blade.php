@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis citas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'createPersonalSanitario', 'method' => 'get']) !!}
                        {!!   Form::submit('Asignar cita', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Paciente</th>
                                <th>Fecha</th>
                                <th>Motivo</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($appointments as $appointment)


                                <tr>
                                    <td>{{ $appointment->paciente->name }}</td>
                                    <td>{{ $appointment->fechaCita }}</td>
                                    <td>{{ $appointment->reason}}</td>

                                    <td>
                                        No hay acciones

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
