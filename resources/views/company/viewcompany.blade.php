@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Companies</h2> <br>

  <!-- 	@foreach($errors->all() as $e)
  		<p class="alert alert-danger">{{$e}}</p>
  	@endforeach -->

  	<div>
  		<a href="{{url('/create')}}" class="btn btn-success" role="button">Add New Company</a>
  	</div> <br>

  	@if(Session::has('status'))
  		<p class="alert alert-success">{{Session::get('status')}}</p>
  	@endif
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Website</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($company as $c)
      <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->Name}}</td>
        <td>{{$c->email}}</td>
        <?php $im= $c->logo ?>
        <td><img src='{{ url("uploads/$im") }}' width="80" class="img-thumbnail" > <!-- {{$c->logo}} --> </td>
        <td>{{$c->website}}</td>
        <td>
          <a href="edit/{{$c->id}}" class="btn btn-primary btn-sm">Edit</a>
        </td>
        <td><a href='delete/{{ $c->id }}' class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $company->links() }}
</div>

@endsection