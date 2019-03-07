@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Create Employee</h2><br>

  	@if (count($errors) > 0)
               @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
               @endforeach 
      @endif

  <form action="{{url('/empadd')}}" method="post">
  	{{csrf_field()}}
    <div class="form-group">
      <label for="name">FirstName:</label>
      <input type="name" class="form-control" id="fname" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="name">LastName:</label>
      <input type="name" class="form-control" id="lname" placeholder="Enter Lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="name">CompanyName:</label>
      <!-- <input type="name" class="form-control" id="cname" placeholder="Enter CompanyName" name="cname"> -->
      <select name="cname" class="form-control">
                @foreach($company as $comp)
                  <option value="{{$comp->id}}"> {{$comp->Name}}</option>
                @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="logo">Phone:</label>
      <input type="name" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
  </form>
</div>

@endsection