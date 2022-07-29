{{-- @extends('app-layout.app')

@section('content')
Register
<div>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name" class="sr-only">Name</label>
            <input type="text" id="name" name="name" placeholder="name" class="@error('name') border-red-500 @enderror"
                value="{{old('name')}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" name="username" placeholder="username" class="@error('name') border-red-500 @enderror"
                class="@error('username') border-red-500 @enderror" value="{{old('username')}}">
            @error('username')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="">phone</label>
            <input type="text" name="phone_number" placeholder="phone number"
                class="@error('phone') border-red-500 @enderror" value="{{old('phone_number')}}">
            @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="">email</label>
            <input type="email" name="email" placeholder="email" class="@error('email') border-red-500 @enderror"
                value="{{old('email')}}">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="password" placeholder="password"
                class="@error('password') border-red-500 @enderror">
            @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="">password_confirmation</label>
            <input type="password" name="password_confirmation" placeholder="password"
                class="@error('password_confirmation') border-red-500 @enderror">
            @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit">Sign up</button>
        </div>
    </form>
</div>
@endsection --}}

@extends('app-layout.app')
@section('content')
<div class="h-screen w-screen py-5 px-36">
    <div class="flex flex-row space-x-5 items-center justify-center h-full w-full">
        <div class="w-1/2">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" alt="">
        </div>
        <div class="w-1/2 flex flex-col space-y-5">
            <div class="text-gray-700 text-5xl">
                <p>Register</p>
            </div>
            <div class="w-1/2">
                <hr>
            </div>
            <div>
                <form action="/register" method="post">
                    @csrf
                    <div class="flex flex-col space-y-3">
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="outline-none w-full @error('name') border-red-500 @enderror"
                                placeholder="Fullname" name="name" value="{{old('name')}}">
                            @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="text" class=" outline-none w-full  @error('username') border-red-500 @enderror"
                                placeholder="Username" name="username" value="{{old('username')}}">
                            @error('username')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="text"
                                class=" outline-none w-full @error('phone_number') border-red-500 @enderror"
                                placeholder="Phone number" name="phone_number" value="{{old('phone_number')}}">
                            @error('phone_number')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="email" class=" outline-none w-full @error('email') border-red-500 @enderror"
                                placeholder="Email" name="email" value="{{old('email')}}">
                            @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="password"
                                class=" outline-none w-full @error('password') border-red-500 @enderror"
                                placeholder="Password" name="password">
                            @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="password"
                                class=" outline-none w-full @error('password_confirmation') border-red-500 @enderror"
                                placeholder="Confirm password" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-1/2 border-none bg-blue-600 text-white p-3 rounded-md">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection