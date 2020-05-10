@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis Tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Tratamiento creado por:</th>
                                <th>Día de creación:</th>
                                <th>Nombre común:</th>
                                <th>Tipo de tratamiento reproductivo:</th>
                                <th colspan="1">Acciones</th>
                            </tr>

                            @foreach ($treatments as $treatment)


                                <tr>
                                    <td>{{ $treatment->personalSanitario->name}}
                                    </td>
                                    <td>{{ $treatment->created_at}}
                                    </td>
                                    <td>{{ $treatment->commonName}}
                                    </td>
                                    <td>{{ $treatment->ReproductiveTreatmentType}}
                                    </td>

                                    <td>
                                        De momento no hay acciones, en el futuro
                                        se verán los medicamentos asociados al tratamiento.
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
