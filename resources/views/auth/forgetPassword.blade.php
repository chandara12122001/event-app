@extends('app-layout.app')
@section('content')
<div class="p-10 w-full h-screen">
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="flex flex-col space-y-5 w-full items-center justify-center">
                        <div class="card-header text-xl">Reset Password</div>
                        <div class="card-body">
    
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                            @endif
    
                            <form action="{{ route('forget.password.post') }}" method="POST">
                                @csrf
                                <div class="flex flex-col space-y-5">
                                    <div>
                                        <input type="text" id="email_address" class="p-3 outline-none rounded-md" name="email" required
                                            autofocus placeholder="email address">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="bg-orange-500 text-white py-3 px-5 w-full rounded-md">
                                        <button type="submit" class="btn btn-primary w-full">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                </div>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection