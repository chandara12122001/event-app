@extends('app-layout.app')
  
@section('content')
      <div class="p-10 w-full h-screen flex items-center justify-center">
        <div class="">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header w-full text-center text-xl">Reset Password</div>
                    <div class="card-body">
        
                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <div class="flex flex-col space-y-5 w-full items-center justify-center">
                                <input type="hidden" name="token" value="{{ $token }}">
                                
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" name="email" required autofocus class="p-3 outline-none rounded-md">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" name="password" required autofocus class="p-3 outline-none rounded-md">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm"  name="password_confirmation" required autofocus class="p-3 outline-none rounded-md">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="bg-red-500 py-3 text-center px-10 rounded-md text-white">
                                    <button type="submit" class="w-full">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection