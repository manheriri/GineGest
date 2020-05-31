@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($users, [ 'route' => ['donacion.update',$users->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('isValid', 'Sexo del feto') !!}
                            {!! Form::select('isValid',['No válido'=>'No válido','Válido'=>'Válido'], ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
