<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class MapLocation extends Component
{
    public $event;
    public $lng;
    public $lat;
    // use AuthorizesRequests;
    public function render()
    {
        // dd($this->lng);
        return view('livewire.map-location');
    }
}
