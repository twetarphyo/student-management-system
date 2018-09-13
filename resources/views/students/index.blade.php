	@extends('layout')

	@section('content')
	<br>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript">
		$("table").dataTable();
	</script>
	<h2 style="margin-left: 20px;" >All Students Information Lists</h2>
	<hr>

        <div class="container">
		<table class="table table-striped">
			<tr>
				<th>Name</th>
				<th>Class</th>
				<th>Age</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
			@foreach($students as $student)
			<tr>
				<td>{{$student->name}}</td>
				<td>{{$student->class}}</td>
				<td>{{$student->age}}</td>
				<td>{{$student->created_at->toFormattedDateString() }}</td>
				<td>
					<a href="{{ route('view', $student->id )}}" class="btn btn-default" > View </a>
					/&nbsp;<a href="{{ route('update', $student->id )}}" class="btn btn-info" > Edit </a>
					 <form style="max-width: 70px;display: inline;" class="inline-form" action="{{ route('delete', $student->id )}}" method="post" >

					    {{ method_field('delete') }}
					    {{ csrf_field() }}
						/&nbsp;<button class="btn btn-danger">Delete</button>
					</form>
					<!-- /&nbsp;<a href="{{ route('delete', $student->id )}}" > <button type="button" name="button" class="btn btn-danger inline-form">Delete</button></a>  -->

				</td>
			@endforeach
		</table>

		<br>

	<a href="/student/create" class="btn btn-info">Add</a>
 	@endsection
