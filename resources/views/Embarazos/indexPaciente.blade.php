@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis embarazos</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha inicio</th>
                                <th>Fecha prevista de parto</th>
                                <th>Fecha de parto</th>
                                <th>Tipo de finalización del parto</th>

                                <th colspan="3">Acciones</th>
                            </tr>

                            @foreach ($pregnancies as $pregnancy)


                                <tr>
                                    <td>{{ $pregnancy->fechaInicio }}
                                    </td>
                                    <td>{{ $pregnancy->fechaPrevista }}
                                    </td>
                                    <td>{{ $pregnancy->fechaFinal }}
                                    </td>
                                    <td>{{ $pregnancy->finalization }}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['verEmbarazo',$pregnancy->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Detalles del embarazo', ['class'=> 'btn btn-outline-primary'])!!}
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
