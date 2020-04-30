@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Medico</th>
                                <th>Fecha</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($appointments as $apointment)


                                <tr>
                                    <td>{{ $apointment->medicoName }}</td>
                                    <td>{{ $apointment->fechaCita }}</td>

                                    <td>{{ $apointment->reason}}</td>

                                    <td>
                                       De momento no hay acciones
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
