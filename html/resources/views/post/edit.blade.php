@extends('app')
@section('body')
    @include('post.partials.menu')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <br class="clearfix" />


                    {!! Form::model($post, ['route' => 'posts.update', 'method' => 'POST']) !!}
                    <fieldset>
                        <legend>Creando nuevo usuario</legend>
                        <div class="form-group">
                            <label>Titulo</label>
                            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Descripcion</label>
                            {!! Form::textarea('descripcion',null, [ 'class' => 'form-control' ]) !!}
                        </div>

                        <div class="form-group">
                            <label>Imagen</label>
                            {!! Form::text('image', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection()