<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>{{$event->going}}</h1>
    <h1>{{$event->interested}}</h1>
    <h1>{{$event->no_of_seats}}</h1>
    {{-- <h3>{{$auth->user}}</h3> --}}
    @foreach ($event->users as $user)
        <div>
            <p>{{$user->name}}</p>
        </div>
    @endforeach
    @if ($message = Session::get('status'))
        <p>
            {{$message}}
        </p>
    @endif
    <button wire:click="incrementGoing">Going</button>
    <button wire:click="incrementInterested">Interested</button>
</div>
