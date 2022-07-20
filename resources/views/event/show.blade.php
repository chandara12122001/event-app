{{-- header --}}
@extends('../app-layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection

@section('content')
<section class="w-full">
    {{-- hero container --}}
    <div class="w-full relative">
        {{-- z-index -1 --}}
        <img class="w-full h-screen z-0"
            src="https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt="">
        <div class="text-white absolute top-3/4 left-1/4 pr-4">
            <h1 class="text-4xl">event.title</h1>
            <p class="text-lg w-3/4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, eos fugiat cumque
                aliquam hic expedita quasi nemo repellendus magnam voluptatem laborum provident vel impedit quas commodi
                ullam architecto odit nisi!</p>
        </div>
    </div>
    {{-- offers section --}}
    <div class="flex w-1/2 mx-auto justify-between mt-8">
        <div class="text-2xl text-center">
            <i class="fa-solid fa-wifi icon text-5xl"></i>
            <p class="">Wifi Access</p>
        </div>
        <div class="text-2xl text-center">
            <i class="fa-solid fa-mug-hot icon  text-5xl"></i>
            <p>Refreshment</p>
        </div>
        <div class="text-2xl text-center">
            <i class="fa-solid fa-restroom icon text-5xl"></i>
            <p>Restroom</p>
        </div>
        <div class="text-2xl text-center">
            <i class="fa-solid fa-book icon text-5xl"></i>
            <p>Materials</p>
        </div>
    </div>
    {{-- info-header section --}}
    {{-- need border1px color orange --}}
    <div class="w-3/4 flex justify-between mx-auto border-2 p-8 mt-8 border-orange-500">
        <div class="text-2xl">
            <i class="fa-solid fa-location-dot icon"></i>
            <p class="inline ml-4">Raffle hotel Cambodia</p>
        </div>
        <div class="text-2xl">
            <i class="fa-solid fa-calendar icon"></i>
            <p class="inline ml-4">22-May-2022</p>
        </div>
        <div class="text-2xl">
            <i class="fa-solid fa-ticket icon"></i>
            <p class="inline ml-4">$5 / Person</p>
        </div>
    </div>

    {{-- main-info section --}}
    <div class="container mx-auto mt-8">
        <div class="">
            <h5 class="font-bold text-4xl">Description</h5>
            <p class="mt-4 px-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia possimus labore nisi
                inventore fuga
                consequuntur error minima assumenda illum incidunt, provident sapiente commodi dolorum numquam quae
                atque perferendis praesentium vero!</p>
        </div>
        {{-- map --}}
        <div class="flex w-full h-screen mt-8">
            <div class="w-1/2">
                <div class="w-full text-center py-4" style="background-color: #FF8989">
                    <a class="w-full text-center py-4 text-white font-bold text-lg" > View on Map</a>
                </div>
            </div>
            {{-- --}}
            <div class="w-1/2 h-full ml-4">
                {{-- oraganizer --}}
                <div class="relative w-full h-1/4" style="border: 3px solid #0BF09ED1">
                    <div class="absolute right-0" style="background-color: #0BF09ED1">
                        <p class="px-8 py-2 font-light">Organizer</p>
                    </div>
                    <div class="text-2xl px-6 py-4">
                        <i class="fa-solid fa-user icon-secondary"></i>
                        <p class="inline ml-4 font-light">Sovortey Ly</p>
                    </div>
                    <div class="text-2xl px-6 py-4">
                        <i class="fa-solid fa-phone icon-secondary"></i>
                        <p class="inline ml-4 font-light">No call allowed</p>
                    </div>
                    <div class="text-2xl px-6 py-4">
                        <i class="fa-solid fa-envelope icon-secondary"></i>
                        <p class="inline ml-4 font-light">sovorteyly1403@gmail.com</p>
                    </div>
                </div>
                {{-- event info --}}
                <div class="mt-4">
                    <div class="text-xl px-6 py-4">
                        <i class="fa-solid fa-calendar-check color-third"></i>
                        <p class="inline ml-4 font-light">500 people are going</p>
                    </div>
                    <div class="text-xl px-6 py-4">
                        <i class="fa-solid fa-star color-third"></i>
                        <p class="inline ml-4 font-light">250 people are interested</p>
                    </div>
                    <div class="text-xl px-6 py-4">
                        <i class="fa-solid fa-chair color-third"></i>
                        <p class="inline ml-4 font-light">20 seats are available</p>
                    </div>
                    <div class="w-full text-center">
                        <button class="w-1/3 bg-second px-6 py-2">Interested</button>
                        <button class="w-1/3 bg-third px-6 py-2">Going</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- related events --}}
    <div>
        {{-- randomly display events --}}
    </div>


</section>
@endsection

{{-- footer --}}