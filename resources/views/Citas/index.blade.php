@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'citas.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Pedir cita', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Medico</th>
                                <th>Fecha</th>
                                <th>Motivo</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($appointments as $appointment)


                                <tr>
                                    <td>{{ $appointment->personalSanitario->fullName }}</td>
                                    <td>{{ $appointment->fechaCita }}</td>
                                    <td>{{ $appointment->reason}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['citas.edit',$appointment->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['eliminarCita',$appointment->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar cita', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro que desea cancelarla?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
