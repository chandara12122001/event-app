<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    {{-- <h1>{{$event->going}}</h1>
    <h1>{{$event->interested}}</h1>
    <h1>{{$event->no_of_seats}}</h1> --}}
    {{-- <h3>{{$auth->user}}</h3> --}}
    {{-- @foreach ($event->users as $user)
        <div>
            <p>{{$user->name}}</p>
        </div>
    @endforeach
    @if ($message = Session::get('status'))
        <p>
            {{$message}}
        </p>
    @endif --}}
    <div class="flex flex-row space-x-10">
        <div class=" cursor-pointer rounded-md bg-red-500 text-white py-2 px-10">
            <button wire:click="incrementGoing">Going</button>
        </div>
        <div class=" cursor-pointer rounded-md bg-orange-400 text-white py-2 px-10">
            <button wire:click="incrementInterested">Interested</button>
        </div>
    </div>
</div>
