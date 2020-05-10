@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis observaciones</div>

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha de la observación</th>
                                <th colspan="1">Acciones</th>
                            </tr>

                            @foreach ($observations as $observation)


                                <tr>
                                    <td>{{ $observation->created_at
 }}
                                    </td>

                                    <td>
                                        {!! Form::open(['route' => ['observaciones.show',$observation->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver Observaciones', ['class'=> 'btn btn-primary'])!!}
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
