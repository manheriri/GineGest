@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Observaciones</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Paciente</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($observations as $observation)


                                <tr>
                                    <td>{{ $observation->paciente_id }}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['observaciones.show',$observation->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver Observaciones', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['observaciones.create',$observation->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Crear Observaciones', ['class'=> 'btn btn-warning'])!!}
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
