@extends('adminkit.layouts.app')
@section('content')

    <h1 class="h3 m-4">Blank Page</h1>
  <div class="row">      
    <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="container">
 <div class="container text-center">
    <a class="btn btn-primary btn-lg m-4" href="{{ route('rooms.create') }}">{{ __('Add Room') }}</a>
  <button class="btn btn-danger btn-lg m-4">Delete Room</button>
  <button class="btn btn-warning btn-lg m-4">Edit Room</button>
  <button class="btn btn-primary btn-lg m-4">Add Room</button>
 </div>
 </div>
                
            </div>
        </div>
    </div>
@endsection
