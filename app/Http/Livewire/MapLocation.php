<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class MapLocation extends Component
{
    public $event;
    // use AuthorizesRequests;
    public function render()
    {
        return view('livewire.map-location');
    }
}
