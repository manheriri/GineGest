@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cita</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($treatments, [ 'route' => ['tratamientos.update',$treatments->id], 'method'=>'PUT']) !!}


                        <div class="form-group">
                            {!! Form::label('commonName', 'Nombre común') !!}
                            {!! Form::text('commonName',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tipoDeTratamiento', 'Tipo de tratamiento') !!}
                            {!! Form::select('tipoDeTratamiento',['FIV-ICSI'=>'FIV-ICSI','ROPA'=>'ROPA','Estimulación Ovárica'=>'Estimulación Ovárica','Inseminación Artificial'=>'Inseminación Artificial','Otros'=>'Otros'], ['class' => 'form-control'])!!}
                        </div>



                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
