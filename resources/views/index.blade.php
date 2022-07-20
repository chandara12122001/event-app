@extends('app-layout.app')
@section('content')
    <div>
        {{-- Start hero --}}
        <div class="">
            <div style="background-image:url(https://traconference.eu/wp-content/uploads/2021/08/pexels-luis-quintero-2833037-scaled-e1629113060469.jpg);"
            class=" bg-cover bg-center">
                <div class="bg-gradient-to-r from-gray-900 to-transparent w-full h-full">
                    <div class="flex flex-col space-y-5 text-white items-start h-full justify-center p-56">
                        <div class="text-4xl">
                            <h2>Everyone can join everywhere</h2>
                        </div>
                        <div class="text-6xl w-1/2">
                            <h1>
                                SHARE YOUR EVENT TO THE WORLD
                            </h1>
                        </div>
                        <div class="w-1/2 p-3 text-2xl flex flex-row space-x-5 justify-center items-center border-white border rounded-md">
                            <div>
                                <a href="/">Publish now</a>
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
        <div class="w-full px-32 my-10">
            <div class="flex flex-row space-x-36">
                <div class="bg-white rounded-md w-1/2">
                    <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                        <div class="flex flex-row space-x-10 items-center justify-center">
                            <div class="text-5xl text-orange-400">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="text-2xl">
                                <h1>
                                    Browse all local events in your community
                                </h1>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="border p-3 rounded-md text-center text-xl text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
                                <a href="/">Browse</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md w-1/2">
                    <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                        <div class="flex flex-row space-x-10 items-center justify-center">
                            <div class="text-5xl text-orange-400">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div class="text-2xl">
                                <h1>
                                    Browse international events, join the world
                                </h1>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="border p-3 rounded-md text-center text-xl text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
                                <a href="/">Browse</a>
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
                <div class="flex flex-row space-x-24 w-full justify-center items-center">
                    <div class="flex flex-col space-y-3 justify-center items-center w-1/5">
                        <div class="text-4xl text-orange-400">
                            <i class="fa-solid fa-users-line"></i>
                        </div>
                        <div class="text-xl">
                            <h2>Get more engagment</h2>
                        </div>
                        <div class="text-center">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 justify-center items-center w-1/5">
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
                    <div class="flex flex-col space-y-3 justify-center items-center w-1/5">
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
                <div class="flex flex-row space-x-24 w-full justify-center items-center">
                    <div class="flex flex-col space-y-3 justify-center items-center w-1/5">
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
                    <div class="flex flex-col space-y-3 justify-center items-center w-1/5">
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
        {{-- Start selected event  --}}
        <div>
            <div style="background-image: url(https://media.istockphoto.com/photos/speaker-giving-presentation-on-scientific-business-conference-picture-id1175031702?k=20&m=1175031702&s=612x612&w=0&h=SnabeA6a_Vu0KXNJe_Xq1KKy2KP70kQDKCGTKPsw-bU=)"
            class="w-full bg-cover bg-center text-white">
                <div class="bg-gradient-to-r from-gray-900 to-transparent w-full h-full">
                    <div class=" p-16 px-28">
                        <div class="flex flex-col space-y-5">
                            <div class="text-5xl font-bold">
                                <h1>
                                    Global Digital Evaluation 2022
                                </h1>
                            </div>
                            <div class="flex flex-row space-x-5 items-center">
                                <div class="text-3xl text-orange-400">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="text-2xl">
                                    <p>Raintree, Phnom Penh, Cambodia</p>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-5 items-center">
                                <div class="text-3xl text-orange-400">
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div class="text-2xl">
                                    <p>Thursday, Aug 15, 2022</p>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-center">
                                <div class="flex flex-row space-x-5 items-center">
                                    <div class="text-3xl text-orange-400">
                                        <i class="fa-solid fa-ticket"></i>
                                    </div>
                                    <div class="text-2xl">
                                        <p>$10 / person</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="border border-orange-400 bg-orange-400 p-3 px-16 rounded-md hover:border-orange-400 hover:bg-transparent hover:text-orange-400 hover:cursor-pointer">
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
    </div>
@endsection