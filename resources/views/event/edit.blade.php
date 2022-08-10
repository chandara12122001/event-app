@extends('app-layout.app')
@php
$images = explode('|', $event->images)
@endphp
@section('content')
@foreach ($event->images as $image)
<img src="{{Storage::url($image->image)}}" width="70px" height="70px" alt="">
<form action="/image/{{$image->id}}" method="POST">
    <button type="submit">X</button>
    @csrf
    @method('DELETE')
</form>
@endforeach
<form method="post" action="/event/{{$event->id}}" enctype="multipart/form-data">
    <div class="input-group control-group increment">
        <input type="text" name="title" placeholder="Event title" value="{{$event->title}}">
        <input type="file" name="files[]" multiple class="form-control" value="{{$event->files}}">
        <p>Images</p>
        <input type="text" placeholder="description" name="description" value="{{$event->description}}">
        <input type="number" placeholder="price" name="price" value="{{$event->price}}">
        <input type="number" placeholder="no_of_seats" name="no_of_seats" value="{{$event->no_of_seats}}">
        <input type="date" name="event_date" value="{{$event->event_date}}">
        <div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
    @csrf
    @method('put')
</form>
@endsection