<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- <div class="m-10"> --}}
        {{-- <div class="flex flex-row space-x-10 items-center justify-center">
            <form>
                <div
                    class="flex md:flex-row md:space-x-10 md:space-y-0 items-center justify-center flex-col space-y-10">
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
                            <input type="text" name="location" placeholder="location"
                                class=" border-none m-3 outline-none">
                        </div>
                    </div>
                    <div
                        class="border-none py-3 px-6 bg-orange-400 rounded-md text-white cursor-pointer flex space-x-5">
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
    </div> --}}
    {{-- End filter --}}
    @if ($search)
    {{-- {{dd($events)}} --}}
    @endif
    <div
        class="flex sm:flex-row w-full sm:space-x-10 sm:space-y-0 p-3 flex-col space-y-5 sm:items-center items-start justify-center m-10">
        <div>
            <label for="">Location</label>
            <select wire:model="byLocation" class="p-3 rounded-md">
                <option value="">Not selected</option>
                @foreach ($locations as $location)
                <option value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Search</label>
            <input type="text" wire:model.debounce.350ms="search" class="p-3 rounded-md outline-none py-2">
        </div>
        <div>
            <label for="">Per page</label>
            <select wire:model="perPage" class="p-3 rounded-md">
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div>
        <div>
            <label for="">Sort By</label>
            <select wire:model="sortBy" class="p-3 rounded-md">
                <option value="asc">AESC</option>
                <option value="desc">DESC</option>
            </select>
        </div>
    </div>
    {{-- Start event list --}}
    <div class="m-10">
        <div class="flex flex-col space-y-10">
            <div class=" grid sm:grid-cols-3 sm:gap-4 grid-cols-1 gap-4">
                @foreach ($events as $event)
                {{-- {{dd($event->images)}} --}}
                <div class="flex flex-row shadow-md rounded-md w-full">
                    <div class="w-1/3 h-full p-3 bg-center bg-cover rounded-tl-md rounded-bl-md"
                        style="background-image: url({{Storage::url($event->images[0]->image)}})">
                        >
                    </div>
                    <div class="flex flex-col space-y-3 w-2/3 p-3">
                        <div class="text-xl font-bold">
                            <h1>{{$event->title}}</h1>
                        </div>
                        <div class="sm:text-lg text-sm hidden sm:block">
                            <p>{{$event->description}}</p>
                        </div>
                        <div>
                            <div
                                class="flex sm:flex-row sm:space-x-4 sm:space-y-0 flex-col space-y-3 sm:items-center items-start">
                                <div class="bg-green-500 rounded-md py-1 px-2 text-white">
                                    @if ($event->price == 0)
                                    <p>Free entry</p>
                                    @else
                                    <p>
                                        ${{$event->price}}
                                    </p>
                                    @endif
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
                            <div
                                class="flex sm:flex-row w-full flex-col items-center rounded-md sm:text-lg text-sm space-y-3 sm:space-y-0 sm:space-x-3">
                                <div
                                    class="sm:w-2/3 w-full text-center p-2 bg-red-500 text-white rounded-tl-md rounded-bl-md cursor-pointer rounded-md">
                                    <p>{{$event->going}} Going</p>
                                </div>
                                <div
                                    class="text-center p-2 bg-orange-400 text-white sm:w-1/3 w-full rounded-tr-md rounded-br-md rounded-md">
                                    <a href="/event/{{$event->id}}">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>