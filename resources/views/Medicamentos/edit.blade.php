@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($medicament, [ 'route' => ['crearMedicamento.update',$medicament->id], 'method'=>'PUT']) !!}



                        <div class="form-group">
                            {!! Form::label('medicamentCommonName', 'Nombre del medicamento') !!}
                            {!! Form::text('medicamentCommonName',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('medicamentPresentation', 'Presentación') !!}
                            {!! Form::text('medicamentPresentation',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>



                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
