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
            $userInEvents = $this->event->users;
            if ($this->event->no_of_seats > 0) {
                foreach ($userInEvents as $user) {
                    // echo ($user->id);
                    if ($user->id != $this->user->id) {
                        $this->interested = true;
                        // dd($user->id, $this->user->id);
                    } else if ($user->id == $this->user->id) {
                        $this->interested = false;
                    }
                }
                // dd($newJoinUser);
                if ($this->interested) {
                    $this->event->update([
                        'interested' => $this->event->interested + 1,
                    ]);
                    $this->event->users()->attach($this->user);
                } else {
                    $this->event->update([
                        'interested' => $this->event->interested - 1,
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
        if ($this->user) {
            $userInEvents = $this->event->users;
            if ($this->event->no_of_seats > 0) {
                foreach ($userInEvents as $user) {
                    if ($user->id != $this->user->id) {
                        // dd("not in list");
                        $this->going = true;
                    } else if ($user->id == $this->user->id) {
                        $this->going = false;
                    }
                }
                // dd($newJoinUser);
                if ($this->going) {
                    $this->event->update([
                        'going' => $this->event->going + 1,
                        'no_of_seats' => $this->event->no_of_seats - 1
                    ]);
                    $this->event->users()->attach($this->user);
                } else {
                    $this->event->update([
                        'going' => $this->event->going - 1,
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
}
