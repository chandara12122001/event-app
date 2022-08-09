<div>

    <h1>{{$event->going}} going</h1>
    <h1>{{$event->interested}} interested</h1>
    <h1>{{$event->no_of_seats}} no_of_seat</h1>
    @if ($message = Session::get('status'))
    <p>
        {{$message}}
    </p>
    @endif
    {{-- {{dd($event->organizer[0]->id)}} --}}
    {{-- {{dd($user->id)}} --}}
    @if (in_array($user->id, $event->users->id))
        <p>yes</p>
    @endif
    
    @if ($user)
    @if ($user->id != $event->organizer[0]->id)
    <button wire:click="incrementGoing">Going</button>
    <button wire:click="incrementInterested">Interested</button>
    @endif
    @endif
</div>