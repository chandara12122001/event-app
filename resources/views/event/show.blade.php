@extends('app-layout.app')
@section('content')
{{-- Start event feature --}}
    <div class="mb-10">
       <div style="background-image: url({{asset($event->images[0]->image)}})"
       class="bg-cover bg-center pt-1/6">
        <div class="bg-gradient-to-t from-gray-900 to-transparent w-full h-full">
            <div class="md:px-36 px-20 py-10 flex flex-col space-y-5">
                <div class="text-3xl text-white font-bold">
                    <h1>{{$event->going}}</h1>
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
    <div class="m-10 md:px-56 px-20">
        <div class="flex md:flex-row md:space-x-28  md:space-y-0 flex-col space-y-10 border border-orange-400 rounded-md p-10 items-center justify-center">
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
                    <p>${{$event->price}} / person</p>
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
                <p>{{$event->description}}</p>
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
                    <div class="w-full rounded-md shadow-md">
                        <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg" alt="">
                    </div>
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
                                {{$event->user->name}}
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
                                {{$event->user->phone_number}}
                            </div>
                        </div>
                        <div class="flex flex-row space-x-3 p-3">
                            <div class="text-green-400">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                {{$event->user->email}}
                            </div>
                        </div> 
                    </div>
                    <div class="flex flex-col rounded-md w-full h-1/2">
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div>
                                <p>{{$event->going}} people is going</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <p id="interestedNum">{{$event->interested}} is interested</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-chair"></i>
                            </div>
                            <div>
                                <p>{{$event->no_of_seats}} seats are available  </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="w-1/3 p-2 text-center text-white rounded-md bg-orange-400 rounded-tr-none rounded-br-none">
                            <a onclick="interestedClick()">
                                Interested
                            </a>
                        </div>
                        <div class="w-2/3 p-2 text-center text-white rounded-md bg-red-400 rounded-tl-none rounded-bl-none">
                            Going
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End detail info --}}
@endsection