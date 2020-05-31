@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de pacientes</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-borderless">
                            <tr> <th>
                        {!! Form::open(['route' => 'observaciones.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear observacion', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}</th><th>
                        {!! Form::open(['route' => 'tratamientos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear tratamiento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}</th><th>
                        {!! Form::open(['route' => 'embarazos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Embarazo', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}</th>

                        </tr>
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>Paciente</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                            @foreach($users as $user)


                                <tr>
                                    <td>{{ $user->fullName}}
                                    </td>

                                    <td>
                                        {!! Form::open(['route' => ['observacionesPersonal',$user->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver Observaciones', ['class'=> 'btn btn-outline-primary'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['tratamientosPersonal',$user->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver tratamientos', ['class'=> 'btn btn-outline-primary'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['embarazosPersonal',$user->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver embarazos', ['class'=> 'btn btn-outline-primary'])!!}
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
