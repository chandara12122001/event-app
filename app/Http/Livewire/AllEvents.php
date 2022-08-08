<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class AllEvents extends Component
{
    use WithPagination;
    public $user;
    public $byLocation = null;
    public $search;
    public $perPage = 10;
    public $sortBy = 'asc';

    public function render()
    {
        $locations = Location::all();
        $events = Event::when($this->byLocation, function ($query) {
            $query->where('location_id', $this->byLocation);
        })->search(trim($this->search))->paginate($this->perPage);
        return view('livewire.all-events', compact('locations', 'events'))->layout('app-layout.app');
    }
}
