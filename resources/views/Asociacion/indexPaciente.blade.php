@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicaciones</div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Medicamento</th>
                                <th>Presentacion</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de finalización</th>
                                <th>Instrucciones</th>


                            </tr>
                            @foreach($asociaciones as $asociacione)

                                <tr>
                                    <td>{{ $asociacione->medicament->medicamentCommonName}}</td>
                                    <td>{{ $asociacione->medicament->medicamentPresentation}}</td>
                                    <td>{{ $asociacione->initialDate}}</td>
                                    <td>{{ $asociacione->finalDate}}</td>
                                    <td>{{ $asociacione->instructions}}</td>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
