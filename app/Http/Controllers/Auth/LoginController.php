<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', "Invalid credentials");
        }

        return redirect('/');
    }

    //google login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLoginUser($user);

        return redirect('/'); 
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        return redirect('/');
        
    }

    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();

        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
            Image::create(
                [
                    'user_id' => $user->id,
                    'image' => 'public/profile/defaultProfile.png'
                ]
            );
        }
        Auth::login($user); 
    }
} 
