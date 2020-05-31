@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear resultado de donación</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'donacion.store']) !!}
                        <div class="form-group">
                            {!! Form::label('donante_id', 'Donante') !!}
                            {!! Form::select('donante_id',$donante, ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('analisisSangre', 'Análisis de sangre') !!}
                            {!! Form::text('analisisSangre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('analisisOrina', 'Análisis de orina') !!}
                            {!! Form::text('analisisOrina',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('generoDonante', 'Género del donante') !!}
                            {!! Form::select('generoDonante',['masculino'=>'Masculino','femenino'=>'Femenino'], ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('pruebaUrologica', 'Resultado prueba urológica') !!}
                            {!! Form::select('pruebaUrologica',['Apto'=>'Apto','No Apto'=>'No Apto'], ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('pruebaGinecologica', 'Resultado prueba ginecológica') !!}
                            {!! Form::select('pruebaGinecologica',['Apta'=>'Apta','No Apta'=>'No Apta'], ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('testPsicologico', 'Resultado del test psicológico') !!}
                            {!! Form::select('testPsicologico',['Apta'=>'Apta','No Apta'=>'No Apta'], ['class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('comments', 'Comentarios') !!}
                            {!! Form::text('comments',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('isValid', 'Validez') !!}
                            {!! Form::select('isValid',['No válido'=>'No válido','Válido'=>'Válido'], ['class' => 'form-control'])!!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
