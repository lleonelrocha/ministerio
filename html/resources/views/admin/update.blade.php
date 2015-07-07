@extends('app')

@section('body')
    @include('partials.menu')
    @include('partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">

                        </div>

                        <div class="col-xs-12 col-lg-8">



                            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
                            <fieldset>
                                <legend>Actualizando datos de {{ $user->fullname }}</legend>
                                @include('admin.partials.form')

                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            </fieldset>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()