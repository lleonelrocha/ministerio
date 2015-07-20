@extends('app')
@section('body')
@include('partials.menu')
    @include('partials.messages')
	<div class="jumbotron">
		<div class="row">
            {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
            <fieldset>
                <legend>Creando nuevo usuario</legend>
                @include('admin.partials.form')
                <div class="form-group">
                    <label>Tipo</label>
                    <select multiple="multiple" class="form-control" name="profile_id">
                        @foreach($profile as $p)
                            <option value="{{ $p->id }}" >{{ $p->name }}</option>
                        @endforeach()
                    </select>
                </div>
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            </fieldset>
            {!! Form::close() !!}
		 </div>
 	</div>
@endsection()