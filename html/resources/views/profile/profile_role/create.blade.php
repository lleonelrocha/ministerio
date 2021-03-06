@extends('app')
@section('body')
    @include('partials.menu')
    @include('partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <h2 >Perfiles de la base de datos</h2>
        </div>
    </div>

    <br class="clearfix" />

    <div clas="row">
        <div class="col-xs-12">
                 {!! Form::open(['route' => 'profile_role.store', 'method' => 'POST']) !!}
            <fieldset>
                <legend>Creando nuevo usuario</legend>
                    <select multiple="multiple" class="form-control" name="profile_id">
                        @foreach ($profiles as $profile)
                            @if(count($profile->roles) == 0 )
                                <option value="{{ $profile->id }}" >{{ $profile->name }}</option>
                            @endif

                        @endforeach
                    </select>
                    <br class="clearfix" />

                    <div class="checkbox">
                        @foreach ($roles as $role)
                            <label class="checkbox-inline" >
                                <input type="checkbox" name="{{$role->id}}" value="{{$role->id}}">{{$role->name}}
                            </label>
                        @endforeach
                    </div>
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection()