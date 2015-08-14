@extends('app')
@section('body')
    @include('post.partials.menu')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <br class="clearfix" />

                    {!! Form::model($user, ['route' => 'posts.usuarioUpdate', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <label>Nombre</label>
                        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Apellido</label>
                        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Numero de Teléfono</label>
                        {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                    </div>


                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection()