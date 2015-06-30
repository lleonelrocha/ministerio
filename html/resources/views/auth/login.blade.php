@extends('app')

@section('body')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@include('partials.messages')

                    {!! Form::open(['route' => 'auth.authenticate', 'method' => 'POST']) !!}

                    <div class="form-group">
                        <label>E-Mail Address</label>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Ingresar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
