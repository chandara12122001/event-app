@extends('app-layout.app')
@section('content')
<div>
    {{-- Start hero --}}
    <div class="">
        <div style="background-image:url(https://traconference.eu/wp-content/uploads/2021/08/pexels-luis-quintero-2833037-scaled-e1629113060469.jpg);"
            class=" bg-cover bg-center h-screen">
            <div class="bg-gradient-to-r from-gray-900 to-transparent w-full h-full">
                <div class="flex flex-col space-y-5 text-white items-start h-full justify-center sm:p-56 p-14">
                    <div class="sm:text-4xl text-lg">
                        <h2>Everyone can join everywhere</h2>
                    </div>
                    <div class="sm:text-6xl sm:w-1/2 text-2xl w-full font-bold">
                        <h1>
                            SHARE YOUR EVENT TO THE WORLD
                        </h1>
                    </div>
                    <div
                        class="sm:w-1/2 p-3 sm:text-2xl flex flex-row space-x-5 justify-center items-center border-white border rounded-md w-full text-xl cursor-pointer hover:bg-white hover:text-gray-700">
                        <div>
                            <a href="/event/new">Publish now</a>
                        </div>
                        <div>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End hero --}}
    {{-- Start cards --}}
    <div class="w-full sm:px-32 px-16 my-10">
        <div class="flex sm:flex-row sm:space-x-36 sm:space-y-0 flex-col space-y-10">
            <div class="bg-white rounded-md sm:w-1/2 w-full">
                <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                    <div class="flex flex-row space-x-10 items-center justify-center">
                        <div class="sm:text-5xl text-orange-400 text-3xl">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="sm:text-2xl text-lg">
                            <h1>
                                Browse all local events in your community
                            </h1>
                        </div>
                    </div>
                    <div class="w-full cursor-pointer">
                        <div
                            class="border p-3 rounded-sm text-center sm:text-xl text-lg text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
                            <a href="/allevents">Browse</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md sm:w-1/2 w-full">
                <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                    <div class="flex flex-row space-x-10 items-center justify-center">
                        <div class="sm:text-5xl text-orange-400 text-3xl">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <div class="sm:text-2xl text-lg">
                            <h1>
                                Browse international events, join the world
                            </h1>
                        </div>
                    </div>
                    <div class="w-full cursor-pointer">
                        <div
                            class="border p-3 rounded-sm text-center sm:text-xl text-lg text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
                            <a href="/allevents">Browse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End card --}}
    {{-- Start Why us --}}
    <div class="my-10">
        <div class="flex flex-col space-y-12 p-10 justify-center items-center w-full bg-white">
            <div class="text-3xl">
                <h1>Why us</h1>
            </div>
            <div class="flex sm:flex-row sm:space-x-24 w-full justify-center items-center flex-col space-y-5">
                <div class="flex flex-col space-y-3 justify-center items-center sm:w-1/5 w-1/2">
                    <div class="text-4xl text-orange-400">
                        <i class="fa-solid fa-users-line"></i>
                    </div>
                    <div class="sm:text-xl text-lg">
                        <h2>Get more engagment</h2>
                    </div>
                    <div class="text-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 justify-center items-center sm:w-1/5 w-1/2">
                    <div class="text-4xl text-red-400">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="text-xl">
                        <h2>Globalize your event</h2>
                    </div>
                    <div class="text-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 justify-center items-center sm:w-1/5 w-1/2">
                    <div class="text-4xl text-orange-400">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <div class="text-xl">
                        <h2>Best of the best</h2>
                    </div>
                    <div class="text-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex sm:flex-row sm:space-x-24 w-full justify-center items-center flex-col space-y-5">
                <div class="flex flex-col space-y-3 justify-center items-center sm:w-1/5 w-1/2">
                    <div class="text-4xl text-red-400">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <div class="text-xl">
                        <h2>Lower cost charging</h2>
                    </div>
                    <div class="text-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 justify-center items-center sm:w-1/5 w-1/2">
                    <div class="text-4xl text-red-400">
                        <i class="fa-solid fa-handshake-simple"></i>
                    </div>
                    <div class="text-xl">
                        <h2>Join our community</h2>
                    </div>
                    <div class="text-center">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Why us --}}
    {{-- Start selected event --}}
    <div>
        <div style="background-image: url(https://media.istockphoto.com/photos/speaker-giving-presentation-on-scientific-business-conference-picture-id1175031702?k=20&m=1175031702&s=612x612&w=0&h=SnabeA6a_Vu0KXNJe_Xq1KKy2KP70kQDKCGTKPsw-bU=)"
            class="w-full bg-cover bg-center text-white">
            <div class="bg-gradient-to-r from-gray-900 to-transparent w-full h-full">
                <div class=" sm:p-16 sm:px-28 p-10">
                    <div class="flex flex-col space-y-5">
                        <div class="sm:text-5xl text-xl font-bold">
                            <h1>
                                Global Digital Evaluation 2022
                            </h1>
                        </div>
                        <div class="flex flex-row space-x-5 items-center">
                            <div class="sm:text-3xl text-xl text-orange-400">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="sm:ext-2xl text-lg">
                                <p>Raintree, Phnom Penh, Cambodia</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 items-center">
                            <div class="sm:text-3xl text-xl text-orange-400">
                                <i class="fa-solid fa-calendar-day"></i>
                            </div>
                            <div class="sm:text-2xl text-lg">
                                <p>Thursday, Aug 15, 2022</p>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row space-x-5 items-center">
                                <div class="sm:text-3xl text-xl text-orange-400">
                                    <i class="fa-solid fa-ticket"></i>
                                </div>
                                <div class="sm:text-2xl text-lg">
                                    <p>$10 / person</p>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="cursor-pointer border border-orange-400 bg-orange-400 p-2 sm:px-16 rounded-md hover:border-orange-400 hover:bg-transparent hover:text-orange-400 hover:cursor-pointer">
                                    <p>Learn more</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End selected event --}}
    {{-- Start event cards --}}
    <div class="sm:px-32 px-10 my-10">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach ($events as $event) <div style="background-image: url({{Storage::url($event->images[0]->image)}})"
                class=" rounded-md  w-full bg-cover bg-center">
                <div class="py-5 px-3 bg-gradient-to-r from-gray-900 to-transparent w-full h-full rounded-md">
                    <div class="flex flex-col space-y-5 text-white">
                        <div class="font-bold sm:text-2xl text-lg">
                            <h1>{{$event->title}}</h1>
                        </div>
                        <div class="flex flex-row sm:space-x-14 space-x-3 sm:text-xl text-sm">
                            <div class="flex flex-row space-x-3 items-center">
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p>
                                        {{$event->location->name}}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-3 items-center">
                                <div>
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div>
                                    <p>
                                        {{$event->event_date}}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-3 items-center">
                                <div>
                                    <i class="fa-solid fa-ticket"></i>
                                </div>
                                <div>
                                    @if ($event->price == 0)
                                    <p>Free entry</p>
                                    @else
                                    <p>
                                        ${{$event->price}}
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-row rounded-xl border border-white cursor-pointer">
                            <div class="w-3/5 bg-green-400 text-center p-2 rounded-xl">
                                {{$event->interested}} interested
                            </div>
                            <div class="w-2/5 text-center p-2 cursor-pointer">
                                <a href="/event/{{$event->id}}">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- End event cards --}}
</div>
@endsection