<div class="flex flex-col rounded-md w-full h-1/2">
    <div class="flex flex-row space-x-5 p-3">
        <div class="text-red-400">
            <i class="fa-solid fa-calendar-check"></i>
        </div>
        <div>
            <div>
                <p>{{$event->going}} people is going</p>
            </div>
        </div>
        <div class="text-red-400">
            <i class="fa-solid fa-star"></i>
        </div>
        <div>
            <p id="interestedNum">{{$event->interested}} is interested</p>
        </div>
        <div class="text-red-400">
            <i class="fa-solid fa-chair"></i>
        </div>
        <div>
            <p>{{$event->no_of_seats}} seats are available </p>
        </div>
        @if ($message = Session::get('status')) <p>
            {{$message}}
        </p>
        @endif

    </div>
    @if ($user)
    @if ($user->id != $event->organizer[0]->id)
    <div class="flex flex-row space-x-10">
        <button wire:click="incrementGoing"
            class="inline-block bg-transparent hover:bg-pink-500 text-pink-700 font-semibold hover:text-white py-2 px-4 border border-pink-500 hover:border-transparent rounded">Going</button>
        <button wire:click="incrementInterested"
            class=" inline-block bg-transparent hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">Interested</button>
    </div>
    @endif
    @endif
    {{-- <div class="flex flex-row space-x-10">
        <div class=" cursor-pointer rounded-md bg-red-500 text-white py-2 px-10">
            <button wire:click="incrementGoing">Going</button>
        </div>
        <div class=" cursor-pointer rounded-md bg-orange-400 text-white py-2 px-10">
            <button wire:click="incrementInterested">Interested</button>
        </div>
    </div> --}}
</div>