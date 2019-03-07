@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Employees</h2> <br>

  <!-- 	@foreach($errors->all() as $e)
  		<p class="alert alert-danger">{{$e}}</p>
  	@endforeach -->

  	<div>
  		<a href="{{url('/empcreate')}}" class="btn btn-success" role="button">Add Employee</a>
  	</div> <br>

  	@if(Session::has('status'))
  		<p class="alert alert-success">{{Session::get('status')}}</p>
  	@endif
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>CompanyName</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($employees as $e)
      <tr>
        <td>{{$e->id}}</td>
        <td>{{$e->firstname}}</td>
        <td>{{$e->lastname}}</td>
        <td>{{$e->company->Name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->phone}}</td>
        <td><a href="empedit/{{$e->id}}" class="btn btn-primary btn-sm">Edit</a></td>
        <td><a href='empdelete/{{ $e->id }}' class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $employees->links() }}
</div>

@endsection