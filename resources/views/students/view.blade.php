@extends('layout')

@section('content')
<br>
<link rel="stylesheet" href="/css/my.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- <ul>

    @foreach($stu as $s)
      <li>
        Name:{{ $s->name }}
      </li>
      <li>
        Class:{{ $s->class }}
      </li>
      <li>
        Age:{{ $s->age }}
      </li>
    @endforeach
</ul> -->

<table class="table table-striped" style="width:300px;" >
  <tr>
    <th colspan="2" style="padding-left:60px;">
      Student All Details
    </th>
  </tr>
  @foreach($stu as $s)
  <tr>
    <th>
      Name:
    </th>
    <td>
      {{ $s->name }}
    </td>
  </tr>
  <tr>
    <th>
      Class:
    </th>
    <td>
      {{ $s->class }}
    </td>
  </tr>
  <tr>
    <th>
      Age:
    </th>
    <td>
      {{ $s->age }}
    </td>
  </tr>
  @endforeach
</table>
@endsection
