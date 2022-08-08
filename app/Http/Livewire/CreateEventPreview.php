<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Image;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEventPreview extends Component
{
    use WithFileUploads;

    public $photo;
    public $event;
    public $title;
    public $description;
    public $price;
    public $no_of_seats;
    public $event_date;
    public $location;
    public $existedLocation;
    public $new_location;
    public $lng;
    public $lat;
    public $user;

    protected $rules = [
        'photo' => 'required',
        'title' => 'required',
        'event_date' => 'required',
        'description' => 'required',
        'price' => 'required',
        'no_of_seats' => 'required',
        // 'location'=>'required'
    ];
    public function mount()
    {
    }
    public function render()
    {
        $locations = Location::all();
        if ($this->location) {
            $this->existedLocation = Location::select('*')->where('name', '=', $this->location)->first();
            $this->lng = $this->existedLocation->lng;
            $this->lat = $this->existedLocation->lat;
            $this->dispatchBrowserEvent('contentChanged', [
                'lng' => $this->lng,
                'lat' => $this->lat
            ]);

        }
        return view('livewire.create-event-preview', compact('locations'));
    }

    public function save()
    {
        $this->validate();
        if ($this->new_location) {
            $location = new Location(
                [
                    'name' => $this->new_location,
                    'lng' => $this->lng,
                    'lat' => $this->lat
                ]
            );
            $location->save();
            $this->location = $location->id;
        } else {
            $this->location = Location::select('id')->where('name', '=', $this->location)->first();
            $this->location = $this->location->id;
        }
        $event = new Event([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'no_of_seats' => $this->no_of_seats,
            'location_id' => $this->location,
            'event_date' => $this->event_date
        ]);
        $event->save();
        $event->users()->attach($this->user->id, ['isOrganizer' => true]);
        $filePath = $this->photo->store('public/banner');
        Image::create(
            [
                'event_id' => $event->id,
                'image' => $filePath
            ]
        );
        return redirect('/event/' . $event->id);
    }
}
