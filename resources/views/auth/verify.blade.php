@extends('app-layout.app')
@section('content')
@if (Session::has('status'))
    {{Session::get('status')}}
@endif
<div class="h-screen">
    <form action="/verify/{{$user->id}}" method="POST" class="h-full">
        @csrf
        <div class="flex flex-col md:space-y-28 space-y-10 w-full items-center justify-center h-full p-10 sm:p-0">
            <input type="hidden" name="email" value="{{$user->email}}" required class="md:w-1/2 w-full">
            <label for="" class="text-3xl font-bold">Email Confirmation</label>
            <input type="text" name="email_verification_code" placeholder="verification codes" required class="sm:w-1/3 w-full p-3 outline-none rounded-md">
            <button type="submit" class="cursor p-3 bg-blue-500 rounded-md text-white px-5 sm:w-1/3 w-full">Submit</button>
        </div>
    </form>
</div>

@endsection