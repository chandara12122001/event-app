@extends('app-layout.app')
@section('content')
{{-- Start filter --}}
<div class="m-10">
    <div class="flex flex-row space-x-10 items-center justify-center">
        <form>
            <div class="flex md:flex-row md:space-x-10 md:space-y-0 items-center justify-center flex-col space-y-10">
                <div class="border border-gray-700 rounded-md p-3 bg-white">
                    <div class="flex justify-center space-x-10">
                        <div>
                            <input type="radio" name="eventType" id="all" value="all">
                            <label for="all">All</label>
                        </div>
                        <div>
                            <input type="radio" name="eventType" id="local" value="local">
                            <label for="local">Local</label>
                        </div>
                        <div>
                            <input type="radio" name="eventType" id="international" value="international">
                            <label for="local">International</label>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-700 rounded-md p-3 bg-white">
                    <div class="flex justify-center space-x-10">
                        <div>
                            <input type="radio" name="eventFee" id="all" value="all">
                            <label for="all">All</label>
                        </div>
                        <div>
                            <input type="radio" name="eventFee" id="free" value="free">
                            <label for="local">Free</label>
                        </div>
                        <div>
                            <input type="radio" name="eventFee" id="paid" value="paid">
                            <label for="local">Paid</label>
                        </div>
                    </div>
                </div>
                <div class="flex border border-gray-700 rounded-md bg-white items-center">
                    <div
                        class="border-l-0 border-t-0 border-b-0 rounded-tl-none rounded-bl-none bg-red-400 p-3 text-white">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="">
                        <input type="text" name="location" placeholder="location" class=" border-none m-3 outline-none">
                    </div>
                </div>
                <div class="border-none py-3 px-6 bg-orange-400 rounded-md text-white cursor-pointer flex space-x-5">
                    <div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div>
                        <button type="submit">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- End filter --}}

{{-- Start event list --}}
<div class="m-10">
    <div class="flex flex-col space-y-10">
        <div class=" grid sm:grid-cols-3 sm:gap-4 grid-cols-1 gap-4">
                @foreach ($events as $event)
                <div class="flex flex-row shadow-md rounded-md w-full">
                    <div class="w-1/3 h-full p-3 bg-center bg-cover rounded-tl-md rounded-bl-md"
                        style="background-image:url({{asset($event->images[0]->image)}})"> 
                    </div>
                    <div class="flex flex-col space-y-3 w-2/3 p-3">
                        <div class="text-xl font-bold">
                            <h1>{{$event->title}}</h1>
                        </div>
                        <div>
                            <p>{{$event->description}}</p>
                        </div>
                        <div>
                            <div class="flex sm:flex-row sm:space-x-4 sm:space-y-0 flex-col space-y-3 sm:items-center items-start">
                                <div class="bg-green-500 rounded-md py-1 px-2 text-white">
                                    <p>$ {{$event->price}}</p>
                                </div>
                                <div class="flex flex-row space-x-2 items-center">
                                    <div>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <p>{{$event->location->name}}</p>
                                    </div>
                                </div>
                                <div class="flex flex-row space-x-2 items-center">
                                    <div>
                                        <i class="fa-solid fa-calendar-day"></i>
                                    </div>
                                    <div>
                                        <p>{{$event->event_date}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-row w-full items-center rounded-md">
                                <div
                                    class="w-2/3 text-center p-2 bg-red-500 text-white rounded-tl-md rounded-bl-md cursor-pointer">
                                    <p>Going</p>
                                </div>
                                <div class="text-center p-2 bg-orange-400 text-white w-1/3 rounded-tr-md rounded-br-md">
                                    <a href="/event/{{$event->id}}">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    {{-- End event list --}}
    @endsection