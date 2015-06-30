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
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            </fieldset>
            {!! Form::close() !!}


					    
		 </div>
 	</div>

@endsection()