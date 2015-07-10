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
                            {!! Form::model($profile, ['route' => ['profile_role.update', $profile->id], 'method' => 'PUT']) !!}
                            <fieldset>
                                <legend>Editando profile role</legend>

                                <select multiple="multiple" class="form-control">
                                        <option value="{{ $profile->id }}" name="{{ $profile->name }}">{{ $profile->name }}</option>
                                </select>

                                <br class="clearfix" />

                                <div class="checkbox"></div>

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