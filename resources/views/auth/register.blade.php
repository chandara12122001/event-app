@extends('app-layout.app')

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
            <input type="text" name="username" placeholder="username"
                class="@error('name') border-red-500 @enderror" class="@error('username') border-red-500 @enderror"
                value="{{old('username')}}">
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
            <input type="email" name="email"  placeholder="email"
                class="@error('email') border-red-500 @enderror" value="{{old('email')}}">
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
@endsection