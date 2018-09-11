	@extends('layout')

	@section('content')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<h1 style="margin-left: 20px;">Add New Student</h1>
	<hr>
	<form method="post" action="/store" style="margin-left: 20px;">
		{{ csrf_field() }}
		<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" style="width:400px;" required>
		</div><br>
		<div class="form-group">
		<label for="class">Class</label>
		<input type="text" name="class" class="form-control" style="width:400px;" required>
		</div><br>
		<div class="form-group">
		<label for="age" >Age</label>
		<input type="text" name="age" class="form-control" style="width:400px;" required>
	    </div>
		<button class="btn btn-info">Add</button>
	</form>
</div>
<br>
@endsection
