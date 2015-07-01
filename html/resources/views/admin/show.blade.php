@extends('app')
@section('body')
    @include('partials.menu')
<div class="container">
	<div class="jumbotron">
		<div class="row">
		  <div class="col-md-3">

		 
		  </div>
		  <div class="col-md-9">
			<address>
			  <strong>Full Name</strong><br>
			   {{ $user->first_name }}<br>
			   {{ $user->last_name }}
			   
			</address>

			<address>
			  <strong>Twitter, Inc.</strong><br>

	  		  {{ $user->phone_number }}<br>
			</address>

			<address>
			  <strong>Email</strong><br>
			  <a href="mailto:#">first.last@example.com</a>
			</address>
			 <a href="{{ url('admin/index') }}" class="btn btn-info" role="button">Volver</a>
		  </div>
		</div>	
 	</div>
</div>
@endsection()