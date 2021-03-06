@extends('app')
@section('body')
    @include('partials.menu')
    @include('partials.messages')
    <div class="jumbotron">
        <div class="row">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
            <fieldset>
                <legend>Actualizando datos de {{ $user->fullname }}</legend>
                @include('admin.partials.form')
                <div class="form-group">
                    <label>Tipo</label>
                    <select multiple="multiple" class="form-control" name="profile_id">
                            <option value="{{ $user->profile->id }}" >{{ $user->profile->name }}</option>
                    </select>
                </div>
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection()