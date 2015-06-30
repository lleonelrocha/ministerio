@extends('app')
@section('body')
    @include('partials.menu')
<div class="container">
	<div class="jumbotron">
		<div class="row">
		  <div class="col-md-3">
		  <img src="{{ $user->imageUrl }}" width="140" height="140" class="img-circle">
		 
		  </div>
		  <div class="col-md-9">
			<address>
			  <strong>Full Name</strong><br>
			   {{ $user->firstName }}<br>
			   {{ $user->lastName }}
			   
			</address>

			<address>
			  <strong>Twitter, Inc.</strong><br>
	  		  {{ $user->country }} - {{ $user->state }}<br>
	  		  {{ $user->phoneNumber }}<br>
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