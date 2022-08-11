@extends('app-layout.app')
@php
$images = explode('|', $event->images)
@endphp
@section('content')
@foreach ($event->images as $image)
<div class="h-screen">
    <div class="flex flex-col space-y-3  p-10 items-conter justify-center w-1/2">
        <img src="{{Storage::url($image->image)}}" alt="">
    </div>
    <form action="/image/{{$image->id}}" method="POST" id="cross-btn">
        <button type="button" onclick="deleteImg()">
            <i class="fa-solid fa-circle-xmark"></i>
        </button>
        @csrf
        @method('DELETE')
    </form>
    @endforeach
        <form method="post" action="/event/{{$event->id}}" enctype="multipart/form-data">
            <div class="flex flex-col space-y-3  p-10 items-conter justify-center w-full">
                <div class="text-center">
                    <input type="text" name="title" placeholder="Event title" value="{{$event->title}}" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <input type="file" name="file" class="form-control" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <input type="text" placeholder="description" name="description" value="{{$event->description}}" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <input type="number" placeholder="price" name="price" value="{{$event->price}}" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <input type="number" placeholder="no_of_seats" name="no_of_seats" value="{{$event->no_of_seats}}" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <input type="date" name="event_date" value="{{$event->event_date}}" class="w-1/4 p-3 rounded-md">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="margin-top:10px">Submit</button>
                </div>

            </div>
            @csrf
            @method('put')
        </form>
</div>
<script>
    function deleteImg(){
        let isDelete = confirm('Are you sure?');
        console.log(isDelete);
        if(isDelete === true){
            document.getElementById('cross-btn').submit();
            console.log('OK')
        }
    }
</script>
@endsection