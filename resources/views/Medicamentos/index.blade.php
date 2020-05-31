@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicamentos</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'crearMedicamento.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear medicamento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre común</th>
                                <th>Presentación</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                            @foreach($medicaments as $medicament)


                                <tr>
                                    <td>{{ $medicament->medicamentCommonName}}
                                    </td>
                                    <td>{{ $medicament->medicamentPresentation}}
                                    </td>

                                    <td>
                                        {!! Form::open(['route' => ['crearMedicamento.edit',$medicament->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td><td>
                                        {!! Form::open(['route' => ['crearMedicamento.destroy',$medicament->id], 'method' => 'delete']) !!}
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
