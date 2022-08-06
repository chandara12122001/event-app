@extends('app-layout.app')
@section('content')
<div>
    <div class=" bg-gray-500 text-center w-full text-white py-20 text-2xl font-bold">
        <p>Create new event</p>
    </div>
    <div>
        @livewire('upload-profile', ['user' => auth()->user()])
        <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="p-10 flex flex-col space-y-10 items-center justify-center">
                <div class="border rounded-md p-3 bg-white w-1/3">
                    <input type="text" name="title" placeholder="Event title" class=" outline-none w-full">
                </div>
                <div class="border rounded-md p-3 bg-white w-1/3">
                    <input type="file" name="files[]" multiple>
                    {{-- <input type="file" name="files[]" placeholder="Event title" class=" outline-none w-full" multiple> --}}
                </div>
                <textarea name="description" id="" cols="30" rows="5" placeholder="description"
                    class="border rounded-md p-3 bg-white w-1/3 outline-none"></textarea>
                <div class="flex flex-row space-x-5 w-1/3">
                    <div class="border rounded-md p-3 bg-white w-full">
                        <input type="number" placeholder="price" name="price" class=" outline-none w-full">>
                        {{-- <input type="text" name="price" placeholder="Price" class=" outline-none w-full"> --}}
                    </div>
                    <div class="border rounded-md p-3 bg-white w-full">
                        <input type="number" placeholder="no_of_seats" name="no_of_seats" class="outline-none w-full">
{{-- 
                        <input type="number" name="no_of_seats" placeholder="Number of seats"
                            class=" outline-none w-full"> --}}
                    </div>
                    <div class="border rounded-md p-3 bg-white w-full">
                        <input type="date" name="event_date" placeholder="Date" class=" outline-none w-full">
                    </div>
                </div>
                <div class="flex flex-col space-y-5 w-1/3">
                    <div>
                        <p>Please add new location if does not exsit</p>
                    </div>
                    <div class="flex flex-row space-x-5 w-full">
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            {{-- <select name="location" id="" class="bg-white w-full">
                                <option value="#">#</option>
                                <option value="#" selected>Select a location</option>
                            </select> --}}
                            <select name="location" id="" class="bg-white w-full">
                                <option value="#" selected>Select a location</option>u
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="border rounded-md p-3 bg-white w-1/2">
                            <input type="text" name="new_location" placeholder="New location"
                                class=" outline-none w-full">
                            <input type="text" name="lng" placeholder="longtitude" class=" outline-none w-full">
                            <input type="text" name="lat" placeholder="latitude" class=" outline-none w-full">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row space-x-5 w-1/3">
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
@endsection