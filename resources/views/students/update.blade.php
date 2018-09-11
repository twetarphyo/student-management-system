@extends('layout')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<h1 style="margin-left: 20px;">Update Students Information</h1>
<hr>

<form method="post" style="margin-left: 20px;">
		{{ csrf_field() }}
		@foreach($stu as $s)

		<div class="form-group">
		<!-- <label for="id">Id</label> -->
		<input type="hidden" name="id" class="form-control" value="{{$s->id}}" style="width:400px;">
		</div><br>

		<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" value="{{$s->name}}" style="width:400px;">
		</div><br>

		<div class="form-group">
		<label for="class">Class</label>
		<input type="text" name="class" class="form-control" value="{{$s->class}}" style="width:400px;">
		</div><br>

		<div class="form-group">
		<label for="age">Age</label>
		<input type="text" name="age" class="form-control" value="{{$s->age}}" style="width:400px;">
		</div><br>

		<button class="btn btn-info">Update</button>
		@endforeach
	</form>

@endsection
