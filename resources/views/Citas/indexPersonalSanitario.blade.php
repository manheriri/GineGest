@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis citas</div>

                    <div class="panel-body">
                        @include('flash::message')


                        <table class="table table-responsive table-borderless">

                            <th>
                        {!! Form::open(['route' => 'createPersonalSanitario', 'method' => 'get']) !!}
                        {!!   Form::submit('Asignar cita a un paciente', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}</th>

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Motivo</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($appointments as $appointment)


                                <tr>
                                    <td>

                                    {{ $appointment->paciente->fullName }}
                                   </td>
                                    <td>{{ $appointment->fechaCita }}</td>
                                    <td>{{ $appointment->reason}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['editarCitasPersonal',$appointment->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar cita', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['editarCitasPersonal',$appointment->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar cita', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro que desea cancelarla?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
