@extends('app-layout.app')
@section('content')
    <div>
        {{-- Start hero --}}
        <div class="">
            <div style="background-image:url(https://traconference.eu/wp-content/uploads/2021/08/pexels-luis-quintero-2833037-scaled-e1629113060469.jpg);"
            class=" bg-cover bg-center">
                <div class="bg-gradient-to-r from-gray-900 to-transparent w-full h-full">
                    <div class="flex flex-col space-y-5 text-white items-start h-full justify-center md:p-56 p-36">
                        <div class="md:text-4xl text-xl">
                            <h2>Everyone can join everywhere</h2>
                        </div>
                        <div class="md:text-6xl md:w-1/2 text-3xl w-full">
                            <h1>
                                SHARE YOUR EVENT TO THE WORLD
                            </h1>
                        </div>
                        <div class="md:w-1/2 p-3 md:text-2xl flex flex-row space-x-5 justify-center items-center border-white border rounded-md w-full text-xl cursor-pointer hover:bg-white hover:text-gray-700">
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
        <div class="w-full md:px-32 px-16 my-10">
            <div class="flex md:flex-row md:space-x-36 flex-col space-y-10">
                <div class="bg-white rounded-md md:w-1/2 w-full">
                    <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                        <div class="flex flex-row space-x-10 items-center justify-center">
                            <div class="md:text-5xl text-orange-400 text-3xl">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="md:text-2xl text-lg">
                                <h1>
                                    Browse all local events in your community
                                </h1>
                            </div>
                        </div>      
                        <div class="w-full cursor-pointer">
                            <div class="border p-3 rounded-md text-center md:text-xl text-lg text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
                                <a href="/">Browse</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md md:w-1/2 w-full">
                    <div class="flex flex-col items-center justify-center space-y-5 w-full p-10">
                        <div class="flex flex-row space-x-10 items-center justify-center">
                            <div class="md:text-5xl text-orange-400 text-3xl">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div class="md:text-2xl text-lg">
                                <h1>
                                    Browse international events, join the world
                                </h1>
                            </div>
                        </div>      
                        <div class="w-full cursor-pointer">
                            <div class="border p-3 rounded-md text-center md:text-xl text-lg text-orange-400 border-orange-400 hover:bg-orange-400 hover:text-white">
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
                <div class="flex md:flex-row md:space-x-24 w-full justify-center items-center flex-col space-y-5">
                    <div class="flex flex-col space-y-3 justify-center items-center md:w-1/5 w-1/2">
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
                    <div class="flex flex-col space-y-3 justify-center items-center md:w-1/5 w-1/2">
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
                    <div class="flex flex-col space-y-3 justify-center items-center md:w-1/5 w-1/2">
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
                <div class="flex md:flex-row md:space-x-24 w-full justify-center items-center flex-col space-y-5">
                    <div class="flex flex-col space-y-3 justify-center items-center md:w-1/5 w-1/2">
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
                    <div class="flex flex-col space-y-3 justify-center items-center md:w-1/5 w-1/2">
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
                                    <div class="cursor-pointer border border-orange-400 bg-orange-400 p-3 px-16 rounded-md hover:border-orange-400 hover:bg-transparent hover:text-orange-400 hover:cursor-pointer">
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
            <div class="md:px-32 px-20 my-10">
                <div class="flex flex-col space-y-10">
                    @for ($j=0; $j<6; $j++)
                        <div class="flex md:flex-row md:space-x-10 flex-col space-y-5  w-full">
                            @for ($i=0; $i<2; $i++)
                                <div style="background-image: url(https://nextcloud.com/wp-content/uploads/2022/04/grouppic2019-scaled.jpg)" class=" rounded-md md:w-1/2 w-full bg-cover bg-center">
                                    <div class="p-5 bg-gradient-to-r from-gray-900 to-transparent w-full h-full rounded-md">
                                        <div class="flex flex-col space-y-5 text-white">
                                            <div class="font-bold text-2xl">
                                                <h1>CADT Community meet up</h1>
                                            </div>
                                            <div class="flex flex-row space-x-14">
                                                <div class="flex flex-row space-x-3 items-center">
                                                    <div>
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            Innovation Center
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row space-x-3 items-center">
                                                    <div>
                                                        <i class="fa-solid fa-calendar-day"></i>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            30 July 2022
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row space-x-3 items-center">
                                                    <div>
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            Free entry
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full flex flex-row rounded-xl border border-white cursor-pointer">
                                                <div class="w-3/5 bg-green-400 text-center p-2 rounded-xl">
                                                    Interested
                                                </div>
                                                <div class="w-2/5 text-center p-2 cursor-pointer">
                                                    <p>Learn more</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>  
                    @endfor
                </div>
            </div>
        {{-- End event cards --}}
    </div>
@endsection