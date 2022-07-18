<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        return Event::with(['user', 'location'])->get();
    }
    public function create(){
        return view('event.create');
    }
}
