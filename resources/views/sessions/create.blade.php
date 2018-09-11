@extends('layout')

@section('content')
		<h1>Sign In</h1>
		<hr>

		<form method="post" action="/login">
			
			{{ csrf_field() }}

		<div class="form-group">
		<label for="email">Email Address:</label>
		<input type="email" name="email" class="form-control" style="width:400px;" required>
		</div><br>

		<div class="form-group">
		<label for="password" >Password:</label>
		<input type="password" name="password" class="form-control" style="width:400px;" required>
		</div><br>

		<button class="btn btn-primary">Sign In</button>
		</form>
@endsection