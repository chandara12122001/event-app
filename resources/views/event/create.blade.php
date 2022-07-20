@extends('app-layout.app')
@section('content')
    <div class="flex flex-col w-full justify-center items-center px-6 space-y-3">
        <div>
            <h1 class="text-3xl ">Post an event</h1>
        </div>
        <div class="w-1/2">
            <hr class=" border-gray-600 border-solid border-1 w-full">
        </div>
        <div>
            <form action="event" method="POST">
                @csrf
                <p>Form Here</p>
            </form>
        </div>
    </div>
@endsection