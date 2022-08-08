<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showCreateProfile()
    {
        $user = auth()->user();
        return view('user.profile.createProfile', compact('user'));
    }
    public function showEditProfile()
    {
        return view('user.profile.editProfile');
    }


    public function createProfile(Request $request)
    {
        // dd("ok create profile");
        // dd($request->file('file'));
        $file = $request->file('file');
        $image_name = md5(rand(1000, 10000));
        $ext = strtolower($file->getClientOriginalExtension());
        $image_full_name =  $image_name . '.' . $ext;
        $upload_path = 'images/';
        $image_url = $upload_path . $image_full_name;
        $file->move($upload_path, $image_full_name);
        // dd(auth()->user()->id);
        Image::create(
            [
                'user_id' => auth()->user()->id,
                'image' => $image_url
            ]
        );
        return redirect('/')->with('success', 'Successfully upload profile!');
    }
    public function editProfile(Request $request)
    {
        $file = $request->file('file');
        $image_name = md5(rand(1000, 10000));
        $ext = strtolower($file->getClientOriginalExtension());
        $image_full_name =  $image_name . '.' . $ext;
        $upload_path = 'images/';
        $image_url = $upload_path . $image_full_name;
        $file->move($upload_path, $image_full_name);
        // dd(auth()->user()->id);
        Image::create(
            [
                'user_id' => auth()->user()->id,
                'image' => $image_url
            ]
        );
        return redirect('/')->with('success', 'Successfully upload profile!');    }
}
