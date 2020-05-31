@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'embarazos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Embarazo', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Paciente</th>
                                <th>Fecha inicio</th>
                                <th>Fecha prevista de parto</th>
                                <th>Fecha de parto</th>
                                <th>Tipo de finalización del parto</th>

                                <th colspan="3">Acciones</th>
                            </tr>

                            @foreach ($pregnancies as $pregnancy)


                                <tr>
                                    <td>{{ $pregnancy->paciente->name }}
                                    </td>
                                    <td>{{ $pregnancy->fechaInicio }}
                                    </td>
                                    <td>{{ $pregnancy->fechaPrevista }}
                                    </td>
                                    <td>{{ $pregnancy->fechaFinal }}
                                    </td>
                                    <td>{{ $pregnancy->finalization }}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['embarazos.show',$pregnancy->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Detalles del embarazo', ['class'=> 'btn btn-outline-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['embarazos.edit',$pregnancy->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['embarazos.destroy',$pregnancy->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Eliminar', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro que desea cancelarla?"))event.preventDefault();'])!!}
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
