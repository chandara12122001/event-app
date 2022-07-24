@extends('app-layout.app')

@section('content')
Register
<div class="mx-auto">
    @if (session('status'))
        {{session('status')}}
    @endif
    <form action="/login" method="POST">
        @csrf
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
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
@endsection