@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Update Employee</h2><br>

    @if (count($errors) > 0)
               @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
               @endforeach 
      @endif

  <form action="{{url('/empupdate/'.$employee->id)}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">FirstName:</label>
      <input type="name" class="form-control" id="fname" value="{{$employee->firstname}}" name="firstname">
    </div>
    <div class="form-group">
      <label for="name">LastName:</label>
      <input type="name" class="form-control" id="lname" value="{{$employee->lastname}}" name="lastname">
    </div>
    <div class="form-group">
      <label for="name">CompanyName:</label>
      <select name="cname" class="form-control">
                @foreach($company as $comp)
                  <option value="{{$comp->id}}" {{ $employee->company_id == $comp->id ? 'selected' : '' }} > {{$comp->Name}}</option>
                @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$employee->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="logo">Phone:</label>
      <input type="name" class="form-control" id="phone" value="{{$employee->phone}}" name="phone">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
  </form>
</div>

@endsection