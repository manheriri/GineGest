@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis resultados</div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Evaluado por</th>
                                <th>Validez</th>
                                <th colspan="1">Acciones</th>
                            </tr>
                            @foreach($results as $result)


                                <tr>
                                    <td>{{ $result->personalSanitario->fullName}}
                                    </td>
                                    <td>
                                        {{ $result->isValid}}
                                    </td>


                                    <td>
                                        {!! Form::open(['route' => ['verResultados',$result->id], 'method' => 'get']) !!}
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
