@section('css')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
@endsection
<div>
    <div class="mb-10 w-full">
        @if ($photo)
        <img class="w-full" src="{{$photo->temporaryUrl()}}" alt="">
        @if($title)
        <h1>{{$title}}</h1>
        @endif
        @endif
    </div>
    {{-- End event feature --}}
    {{-- Start facilities --}}
    <div class="m-10 md:px-56">
        <div class="flex md:flex-row md:space-x-28 md:space-y-0 items-center justify-center flex-col space-y-5">
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-wifi"></i>
                </div>
                <div>
                    <p>WiFi Access</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div>
                    <p>Refreshment</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-restroom"></i>
                </div>
                <div>
                    <p>Restroom</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-book"></i>`
                </div>
                <div>
                    <p>Support Document</p>
                </div>
            </div>
        </div>
    </div>
    {{-- info-header section --}}
    {{-- need border1px color orange --}}
    {{-- <div class="w-3/4 flex justify-between mx-auto border-2 p-8 mt-8 border-orange-500">
        <div class="text-2xl">
            <i class="fa-solid fa-location-dot icon"></i>
            <p class="inline ml-4">{{$event->location->name}}</p>
        </div>
        <div class="text-2xl">
            <i class="fa-solid fa-calendar icon"></i>
            <p class="inline ml-4">{{$event->event_date}}</p>
        </div>
        <div class="text-2xl">
            <i class="fa-solid fa-ticket icon"></i>
            <p class="inline ml-4">${{$event->price}}/ Person</p>
        </div>
    </div> --}}

    {{-- main-info section --}}
    {{-- <div class="container mx-auto mt-8">
        <div class="">
            <h5 class="font-bold text-4xl">Description</h5>
            <p class="mt-4 px-8">{{$event->description}}</p> --}}
            {{-- End facilities --}}
            {{-- Start important info --}}
            <div class="m-10 md:px-56 px-20">
                <div
                    class="flex md:flex-row md:space-x-28  md:space-y-0 flex-col space-y-10 border border-orange-400 rounded-md p-10 items-center justify-center">
                    <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                        @if ($location || $new_location)
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="text-gray-900">
                            @if ($location)
                            <p>{{$location}}</p>
                            @else
                            <p>{{$new_location}}</p>
                            @endif
                        </div>
                        @endif
                    </div>
                    <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                        <div>
                            <i class="fa-solid fa-calendar-day"></i>
                        </div>
                        <div class="text-gray-900">
                            @if ($event_date)
                            <p>{{$event_date}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                        <div>
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <div class="text-gray-900">
                            @if ($price)
                            <p>${{$price}} / person</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{-- End important info --}}
            {{-- Start description --}}
            <div class="m-10 md:px-56 px-20">
                <div class="flex flex-col space-y-6">
                    <div class="text-xl text-gray-800 font-bold">
                        <p>Description</p>
                    </div>
                    <div class="w-full text-justify">
                        @if ($description)
                        <p>{{$description}}</p>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End description --}}
            {{-- Start detail info --}}
            <div class="m-10 md:px-56 px-20">
                <div class="flex md:flex-row md:space-x-10 md:space-y-0 flex-col space-y-10">
                    <div class="md:w-1/2 w-full">
                        <div class="flex flex-col space-y-3">
                            <div class="w-full rounded-md text-center p-2 bg-red-400 text-white">
                                <div class="flex flex-row space-x-3 items-center justify-center text-lg">
                                    <div>
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div>
                                        <p>View on map</p>
                                    </div>
                                </div>
                            </div>
                            @if($location)
                            {{-- {{dd($location)}} --}}
                            <div class="w-full rounded-md shadow-md">
                                <div id='map' style='width: 400px; height: 300px;'></div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex flex-col space-y-5">
                            <div class="flex flex-col border border-green-400 rounded-md w-full h-1/2">
                                <div class="flex flex-row space-x-3 p-3 w-full items-center">
                                    <div class="text-green-400">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        {{auth()->user()->name}}
                                    </div>
                                    <div class=" flex-grow flex flex-row justify-end text-white relative right-0">
                                        <div class=" bg-green-400 rounded-md p-2">
                                            <p>Organizer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row space-x-3 p-3">
                                    <div class="text-green-400">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div>
                                        @if (auth()->user()->phone_number))
                                        {{auth()->user()->phone_number}}
                                        @endif
                                    </div>
                                </div>
                                <div class="flex flex-row space-x-3 p-3">
                                    <div class="text-green-400">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div>
                                        {{auth()->user()->email}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md w-full h-1/2">
                                <div class="flex flex-row space-x-5 p-3">
                                    <div class="text-red-400">
                                        <i class="fa-solid fa-calendar-check"></i>
                                    </div>
                                    <div>
                                        <p>#0 of people are going</p>
                                    </div>
                                </div>
                                <div class="flex flex-row space-x-5 p-3">
                                    <div class="text-red-400">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div>
                                        <p>#0 is interested</p>
                                    </div>
                                </div>
                                <div class="flex flex-row space-x-5 p-3">
                                    <div class="text-red-400">
                                        <i class="fa-solid fa-chair"></i>
                                    </div>
                                    <div>
                                        @if ($no_of_seats)
                                        <p>{{$no_of_seats}} seats are available </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                {{-- @livewire('event-info-increment', ['event' => $event, 'user' => Auth::user()]) --}}
                                {{-- <div
                                    class="w-1/3 p-2 text-center text-white rounded-md bg-orange-400 rounded-tr-none rounded-br-none">
                                    <a onclick="interestedClick()">
                                        Interested
                                    </a>
                                </div>
                                <div
                                    class="w-2/3 p-2 text-center text-white rounded-md bg-red-400 rounded-tl-none rounded-bl-none">
                                    Going
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- preview --}}
            <form wire:submit.prevent="save">
                <div class="p-10 flex flex-col space-y-10 items-center justify-center">
                    <div class="border rounded-md p-3 bg-white sm sm:w-1/3 w-full">
                        <input wire:model="title" type="text" placeholder="Event title" class=" outline-none w-full">
                    </div>
                    <div class="border rounded-md p-3 bg-white sm sm:w-1/3 w-full">
                        <input type="file" wire:model="photo">
                    </div>
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                    <textarea wire:model="description" id="" cols="30" rows="5" placeholder="description"
                        class="border rounded-md p-3 bg-white sm:w-1/3 w-full outline-none"></textarea>
                    <div class="flex flex-row space-x-5 sm:w-1/3 w-full">
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="number" placeholder="price" wire:model="price" class=" outline-none w-full">>
                        </div>
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="number" placeholder="no_of_seats" wire:model="no_of_seats"
                                class="outline-none w-full">
                        </div>
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="date" wire:model="event_date" placeholder="Date" class=" outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-5 sm:w-1/3 w-full">
                        <div class="flex flex-row space-x-3 w-full">
                            {{-- <div class="w-1/2 text-center bg-orange-500 rounded-md text-white py-2 cursor-pointer"
                                onclick="addNewLocation()">
                                <p>Add new location</p>
                            </div> --}}
                            {{-- <div class="w-1/2 text-center bg-red-500 rounded-md text-white py-2 cursor-pointer"
                                onclick="addExistedLocation()">
                                <p>Add existed location</p>
                            </div> --}}
                        </div>
                        <div class="flex flex-row space-x-5 w-full">
                            <div class="border rounded-md p-3 bg-white w-full" id="existedLocation">
                                <select wire:model="location" class="bg-white w-full">
                                    <option value="#" selected>Select a location</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->name}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border rounded-md p-3 bg-white w-full" id="newLocation">
                                <input type="text" wire:model="new_location" placeholder="New location"
                                    class=" outline-none w-full">
                                <input type="text" wire:model="lng" placeholder="longtitude"
                                    class=" outline-none w-full">
                                <input type="text" wire:model="lat" placeholder="latitude" class=" outline-none w-full">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-5 sm:w-1/3 w-full">
                        <div class="w-1/2 text-center bg-red-500 text-white py-2 rounded-md cursor-pointer">
                            <button type="submit">Publish</button>
                        </div>
                        <div
                            class="w-1/2 text-center border-orange-400 text-orange-400 border py-2 rounded-md cursor-pointer">
                            <button type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@if($location)
@push('scripts')
{{-- {{dd("yes")}} --}}
<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
<script>
    window.addEventListener('contentChanged', function(e){
        mapboxgl.accessToken = 'pk.eyJ1IjoiY2hhbmRhcmF5aSIsImEiOiJja3F0bmgwOHUyYXZhMm5xcW5qaW1paHR5In0.Zvz6Z-VOdO7-pkX8G1ZrVA';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/dark-v10', // style URL
        center: [e.detail.lat,e.detail.lng], // starting position [lng, lat]
        zoom: 12, // starting zoom   
    });
    const marker = new mapboxgl.Marker()    
    .setLngLat([e.detail.lat,e.detail.lng])
    .addTo(map); // ad the marker to the map  
    })
</script>
@endpush
@endif