@extends('layout')

@section('content')
		<h1>Sign In</h1>
		<hr>

		<form method="post" action="/register">
			
			{{ csrf_field() }}

		<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="name" class="form-control" style="width:400px;" required>
		</div><br>

		<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name="email" class="form-control" style="width:400px;" required>
		</div><br>

		<div class="form-group">
		<label for="password" >Password:</label>
		<input type="password" name="password" class="form-control" style="width:400px;" required>
		</div><br>
		
	    <div class="form-group">
		<label for="password_confirmation" >Password Confirmation:</label>
		<input type="password" name="password_confirmation" class="form-control" style="width:400px;" required>

	    </div>

		<button class="btn btn-primary">Register</button>
		</form>
@endsection