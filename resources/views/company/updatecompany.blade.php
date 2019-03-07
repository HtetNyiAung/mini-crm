@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Update Company</h2>
  @if (count($errors) > 0)
               @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
               @endforeach 
      @endif
  <form action="{{url('/update/'.$company->id)}}" method="post" enctype="multipart/form-data">
  	{{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" value="{{$company->Name}}" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$company->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="logo">Logo:</label>
      <input type="file" class="form-control" id="logo" value="{{$company->logo}}" name="logo">
    </div>
    <div class="form-group">
      <label for="website">Website:</label>
      <input type="name" class="form-control" id="website" value="{{$company->website}}" name="website">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
  </form>
</div>

@endsection