@extends('app-layout.app')
@section('content')
@if (Session::has('status'))
    {{Session::get('status')}}
@endif
<form action="/verify/{{$user->id}}" method="POST">
    @csrf
    <input type="hidden" name="email" value="{{$user->email}}" required>
    <label for="">Email Confirmation</label>
    <input type="text" name="email_verification_code" placeholder="verification codes" required>
    <button type="submit">Submit</button>
</form>

@endsection