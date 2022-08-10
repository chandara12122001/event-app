@extends('app-layout.app')
@section('content')
    <div class="h-screen flex flex-col items-center justify-center">
        <div class="w-full">  
            <form action="/user/{{$user->id}}" method="post">
                @csrf
                @method('put')
                <div class="flex flex-col space-y-5 w-full items-center justify-center p-10">
                    <div class="text-center text-xl font-bold p-3 bg-orange-400 rounded-md text-white sm:w-1/4 w-full my-10">
                        <p>Edit user profile</p>
                    </div>
                    <div class="w-full text-center">
                        <label for="">Name</label>
                        <input type="text" class="p-3 outline-none rounded-md sm:w-1/4 w-full" value="{{$user->name}}" name="name">
                    </div>
                    <div class="w-full text-center">
                        <label for="">Username</label>
                        <input type="text" class="p-3 outline-none rounded-md sm:w-1/4 w-full" value="{{$user->username}}" name="username">
                    </div>
                    <div class="w-full text-center">
                        <label for="">Phone Number</label>
                        <input type="text" class="p-3 outline-none rounded-md sm:w-1/4 w-full" name="phone_number" value="{{$user->phone_number}}">
                    </div>
                    <div class="sm:w-1/4 w-full text-center p-2 rounded-md text-white bg-red-500">
                        <button type="submit" class="w-full">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection