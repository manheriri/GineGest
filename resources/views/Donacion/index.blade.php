@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de donantes</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'donacion.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Evaluar', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}
                        <table class="table table-striped table-bordered">

                            <tr>
                                <th>Donante</th>
                                <th>Validez</th>

                                <th colspan="1">Acciones</th>
                            </tr>
                            @foreach($users as $user)


                                <tr>
                                    <td>{{ $user->donante->fullName}}
                                    </td>
                                    <td>{{ $user->isValid}}
                                    </td>

                                        <td>
                                        {!! Form::open(['route' => ['donacion.show',$user->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver resultados', ['class'=> 'btn btn-primary'])!!}
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
