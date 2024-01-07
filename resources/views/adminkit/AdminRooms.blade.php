<!-- In AdminRooms.blade.php or any other relevant view file -->
@extends('adminkit.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../storage/uploadimg/{{ $room->filename }}" alt="{{ $room->name }}" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $room->name }}</h5>
                            <p class="card-text">
                                Bed Rooms: {{ $room->bedRooms }}<br>
                                Bath Rooms: {{ $room->bathRooms }}<br>
                                Area: {{ $room->area }}<br>
                                Floor: {{ $room->floor }}<br>
                                Price: ${{ $room->price }}
                            </p>
                            <!-- Add any other details you want to display -->

                            <!-- Example: Add a link to view more details -->
                            <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
