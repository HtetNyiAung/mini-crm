@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br><br>
                    <!-- <div class="row">
                        <div class="col">
                            <a href="{{url('/view')}}" class="badge badge-warning" style='font-size: 20px;' title='Company'>Company</a>
                        </div>
                        <div class="col">
                            <a href="{{url('/empview')}}" class="badge badge-danger" style='font-size: 20px;' title='Employee'>Employee</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
