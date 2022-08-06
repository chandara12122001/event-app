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
<div class="h-screen w-screen py-5 sm:px-36 px-14">
    <div class="flex sm:flex-row sm:space-x-5 sm:space-y-0 flex-col space-y-5 items-center justify-center h-full w-full">
        <div class="sm:w-1/2 w-2/3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" alt="">
        </div>
        <div class="sm:w-1/2 w-full flex flex-col space-y-5">
            <div class="text-gray-700 sm:text-5xl text-2xl">
                <p>Register</p>
            </div>
            <div class="sm:w-1/2 w-full">
                <hr>
            </div>
            <div class="flex-col space-y-5">
                <form action="/register" method="post">
                    @csrf
                    <div class="flex flex-col space-y-5 items-center justify-center w-full">
                        <div class="w-full flex flex-row items-center justify-evenly">
                            <div class="flex flex-row space-x-3 p-2 items-center justify-center text-white bg-red-500 rounded-md">
                              <div>
                                <i class="fa-brands fa-google"></i>
                              </div>
                              <div>
                                <a href="{{route('login.google')}}">Google</a>
                              </div>
                            </div>
                            <div class="flex flex-row space-x-3 p-2 items-center justify-center text-white bg-blue-500 rounded-md">
                              <div>
                                <i class="fa-brands fa-facebook"></i>
                              </div>
                              <div>
                                <a href="{{route('login.facebook')}}">Facebook</a>
                              </div>
                            </div>
                        </div>
                        <div class="font-bold">
                            <p>Or</p>
                        </div>
                        <div class="flex flex-col space-y-3 w-full">
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="outline-none w-full @error('name') border-red-500 @enderror"
                                    placeholder="Fullname" name="name" value="{{old('name')}}">
                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
                                <input type="text" class=" outline-none w-full  @error('username') border-red-500 @enderror"
                                    placeholder="Username" name="username" value="{{old('username')}}">
                                @error('username')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
                                <input type="text"
                                    class=" outline-none w-full @error('phone_number') border-red-500 @enderror"
                                    placeholder="Phone number" name="phone_number" value="{{old('phone_number')}}">
                                @error('phone_number')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
                                <input type="email" class=" outline-none w-full @error('email') border-red-500 @enderror"
                                    placeholder="Email" name="email" value="{{old('email')}}">
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
                                <input type="password"
                                    class=" outline-none w-full @error('password') border-red-500 @enderror"
                                    placeholder="Password" name="password">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="border rounded-md p-3 bg-white sm:w-1/2 w-full">
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
                        
                        <div class="w-full">
                            <button type="submit" class="sm:w-1/2 w-full border-none bg-blue-600 text-white p-3 rounded-md">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection