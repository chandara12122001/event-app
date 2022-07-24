@extends('app-layout.app')
@section('content')
    {{-- Start filter --}}
    <div class="m-10">
        <div class="flex flex-row space-x-10 items-center justify-center">
            <form>
                <div class="flex flex-row space-x-10 items-center justify-center">
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
                        <div class="border-l-0 border-t-0 border-b-0 rounded-tl-none rounded-bl-none bg-red-400 p-3 text-white">
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
            <div class="flex flex-col space-y-5">
                @for ($j=0; $j<15; $j++)
                    <div class="flex flex-row space-x-5 items-stretch">
                        @for ($i=0; $i<3; $i++)
                            <div class="flex flex-row shadow-md rounded-md">
                                <div class="w-1/3 h-full p-3 bg-center bg-cover rounded-tl-md rounded-bl-md" 
                                style="background-image:url('https://bevents.co/wp-content/uploads/2020/02/events.jpg')">
                                </div>
                                <div class="flex flex-col space-y-3 w-2/3 p-3">
                                    <div class="text-xl font-bold">
                                        <h1>Cambodia Digital 4.0</h1>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam blanditiis similique deserunt deleniti aperiam accusantium harum cumque nam delectus cupiditate laudantium quia dolor itaque possimus, rerum a odio consequuntur! Obcaecati!</p>
                                    </div>
                                    <div>
                                        <div class="flex flex-row space-x-4 items-center">
                                            <div class="bg-green-500 rounded-md py-1 px-2 text-white">
                                                <p>Free</p>
                                            </div>
                                            <div class="flex flex-row space-x-2 items-center">
                                                <div>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div>
                                                    <p>Phnom Penh</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row space-x-2 items-center">
                                                <div>
                                                    <i class="fa-solid fa-calendar-day"></i>
                                                </div>
                                                <div>
                                                    <p>12 Dec 2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-row w-full items-center rounded-md">
                                            <div class="w-2/3 text-center p-2 bg-red-500 text-white rounded-tl-md rounded-bl-md">
                                                <p>Going</p>
                                            </div>
                                            <div class="text-center p-2 bg-orange-400 text-white w-1/3 rounded-tr-md rounded-br-md">
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
    {{-- End event list --}}
@endsection