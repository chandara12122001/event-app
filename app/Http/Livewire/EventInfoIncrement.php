<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class EventInfoIncrement extends Component
{
    use AuthorizesRequests;
    public $event;
    public $user;
    private $going = false;
    private $interested = false;    


    public function render()
    {
        return view('livewire.event-info-increment');
    }
    public function incrementInterested()
    {
        if ($this->user) {
            // dd(auth()->user()->id);
            // dd($this->event->no_of_seats);
            $userInEvents = $this->event->users;
            // dd($userInEvents);
            // dd($userInEvents);
            if ($this->event->no_of_seats > 0) {
                foreach ($userInEvents as $user) {
                    if ($user->id != $this->user->id) {
                        $this->interested = true;
                    } else if ($user->id == $this->user->id) {
                        $this->interested = false;
                    }
                }
                // dd($newJoinUser);
                if ($this->interested) {
                    $this->event->update([
                        'interested' => $this->event->interested + 1,
                        'no_of_seats' => $this->event->no_of_seats - 1
                    ]);
                    $this->event->users()->attach($this->user);
                } else {
                    $this->event->update([
                        'interested' => $this->event->interested - 1,
                        'no_of_seats' => $this->event->no_of_seats + 1
                    ]);
                    $this->event->users()->detach($this->user);
                }
            } else {
                return with('status', 'Seats are not avaialble');
            }
        }else{
            return redirect('/login')->with('fail', 'You have to logged in first');;
        }
    }
    public function incrementGoing()
    {
        $this->event->update([
            'going' => $this->event->going + 1,
        ]);
        $this->event->users()->attach($this->user);
    }
}
