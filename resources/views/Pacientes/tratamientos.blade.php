@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'tratamientos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear tratamiento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Paciente</th>
                                <th>Nombre común</th>
                                <th>Tipo de tratamiento</th>
                                <th colspan="4">Acciones</th>
                            </tr>

                            @foreach ($treatments as $treatment)


                                <tr>
                                    <td>{{ $treatment->paciente->name }}
                                    </td>
                                    <td>{{ $treatment->commonName }}
                                    </td>
                                    <td>{{ $treatment->tipoDeTratamiento }}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['asociacionPorTreatment',$treatment->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver medicación', ['class'=> 'btn btn-primary'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['createMedicament',$treatment->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Agregar medicación', ['class'=> 'btn btn-primary'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['tratamientos.edit',$treatment->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['tratamientos.destroy',$treatment->id], 'method' => 'delete']) !!}
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
