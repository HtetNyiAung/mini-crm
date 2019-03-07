@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Create Company</h2><br>

  	@if (count($errors) > 0)
               @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
               @endforeach 
      @endif

  <form action="{{url('/add')}}" method="post" enctype="multipart/form-data">
  	{{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="logo">Logo:</label>
      <input type="file" class="form-control" id="pwd" placeholder="Choose" name="logo">
    </div>
    <div class="form-group">
      <label for="website">Website:</label>
      <input type="name" class="form-control" id="website" placeholder="Enter website" name="website">
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
  </form>
</div>

@endsection