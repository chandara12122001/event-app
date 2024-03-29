@extends('app-layout.app')
@section('content')
{{-- Start event feature --}}
{{-- {{dd($event->organizer)}} --}}
<div class="mb-10">
    <div style="background-image: url({{Storage::url($event->images[0]->image)}})" class="bg-cover bg-center pt-1/6">
        <div class="bg-gradient-to-t from-gray-900 to-transparent w-full h-full">
            <div class="md:px-36 px-20 py-10 flex flex-col space-y-5">
                <div class="text-3xl text-white font-bold">
                    <h1>{{$event->title}}</h1>
                </div>
                <div class="text-white">
                    <p>{{$event->description}}</p>
                </div>
            </div>
        </div>
    </div>
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
        <div class="m-10 sm:px-56 px-5">
            <div
                class="flex md:flex-row md:space-x-28  md:space-y-0 flex-col space-y-10 border border-orange-400 rounded-md p-10 items-center justify-center">
                <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                    <div hidden id="eventID">
                        {{$event->id}}
                    </div>
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text-gray-900">
                        <p>{{$event->location->name}}</p>
                    </div>
                </div>
                <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                    <div>
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <div class="text-gray-900">
                        <p>{{$event->event_date}}</p>
                    </div>
                </div>
                <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                    <div>
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <div class="text-gray-900">
                        @if ($event->price == 0)
                        <p>Free entry</p>
                        @else
                        <p>${{$event->price}} / person</p>

                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- End important info --}}
        {{-- Start description --}}
        <div class="m-10 sm:px-56 px-3">
            <div class="flex flex-col space-y-6">
                <div class="text-xl text-gray-800 font-bold">
                    <p>Description</p>
                </div>
                <div class="w-full text-justify sm:text-lg text-sm">
                    <p>{{$event->description}}</p>
                </div>
            </div>
        </div>
        {{-- End description --}}
        {{-- Start detail info --}}
        <div class="m-10 sm:px-56 px-3">
            <div class="flex sm:flex-row sm:space-x-10 sm:space-y-0 flex-col space-y-10 w-full">
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
                        <div class="w-full rounded-md shadow-md">
                            @livewire('map-location', ['lng' => $event->location->lng, 'lat'=>$event->location->lat])
                        </div>
                    </div>
                </div>
                <div class="sm:w-1/2 w-full">
                    <div class="flex flex-col space-y-5">
                        <div class="flex flex-col border border-green-400 rounded-md w-full h-1/2">
                            <div class="flex flex-row space-x-3 p-3 w-full items-center">
                                <div class="text-green-400">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="sm:text-lg text-sm">
                                    {{$event->organizer[0]->name}}
                                </div>
                                <div
                                    class=" flex-grow flex flex-row justify-end text-white relative right-0 sm:text-lg text-sm">
                                    <div class=" bg-green-400 rounded-md p-2">
                                        <p>Organizer</p>
                                    </div>
                                </div>
                            </div>
                            @if (!empty($event->oragnizer[0]->phone_number))
                            <div class="flex flex-row space-x-3 p-3">
                                <div class="text-green-400">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="sm:text-lg text-sm">
                                    <div>
                                        {{$event->organizer[0]->phone_number}}
                                    </div>
                                </div>
                            </div>
                            @endif
                                <div class="flex flex-row space-x-3 p-3 w-full">
                                    <div class="flex flex-row space-x-3 p-3">
                                        <div class="text-green-400">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="w-full sm:text-lg text-sm">
                                            {{$event->organizer[0]->email}}
                                        </div>
                                    </div>
                                </div>  
                                <div class="flex sm:flex-row flex-col w-full">
                                    <div class="flex flex-row">
                                        @livewire('event-info-increment', ['event' => $event, 'user' => Auth::user()])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection