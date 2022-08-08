@extends('app-layout.app')
@section('content')
<div>
    <div class=" bg-gray-500 text-center w-full text-white py-20 text-2xl font-bold">
        <p>Create new event</p>
    </div>
    <div>
        {{-- @livewire('upload-profile', ['user' => auth()->user()]) --}}
        <div>
            {{-- <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="p-10 flex flex-col space-y-10 items-center justify-center">
                    <div class="border rounded-md p-3 bg-white sm sm:w-1/3 w-full">
                        <input type="text" name="title" placeholder="Event title" class=" outline-none w-full">
                    </div>
                    <div class="border rounded-md p-3 bg-white sm:w-1/3 w-full">
                        <input type="file" name="files[]" multiple required>
                    </div>
                    <textarea name="description" id="" cols="30" rows="5" placeholder="description"
                        class="border rounded-md p-3 bg-white sm:w-1/3 w-full outline-none"></textarea>
                    <div class="flex flex-row space-x-5 sm:w-1/3 w-full">
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="number" placeholder="price" name="price" class=" outline-none w-full">>
                        </div>
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="number" placeholder="no_of_seats" name="no_of_seats"
                                class="outline-none w-full">
                        </div>
                        <div class="border rounded-md p-3 bg-white w-full">
                            <input type="date" name="event_date" placeholder="Date" class=" outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-5 sm:w-1/3 w-full">
                        <div class="flex flex-row space-x-3 w-full">
                            <div class="w-1/2 text-center bg-orange-500 rounded-md text-white py-2 cursor-pointer"
                                onclick="addNewLocation()">
                                <p>Add new location</p>
                            </div>
                            <div class="w-1/2 text-center bg-red-500 rounded-md text-white py-2 cursor-pointer"
                                onclick="addExistedLocation()">
                                <p>Add existed location</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 w-full">
                            <div class="border rounded-md p-3 bg-white w-full hidden" id="existedLocation">
                                <select name="location" class="bg-white w-full">
                                    <option value="#" selected>Select a location</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border rounded-md p-3 bg-white w-full hidden" id="newLocation">
                                <input type="text" name="new_location" placeholder="New location"
                                    class=" outline-none w-full">
                                <input type="text" name="lng" placeholder="longtitude" class=" outline-none w-full">
                                <input type="text" name="lat" placeholder="latitude" class=" outline-none w-full">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-5 sm:w-1/3 w-full">
                        <div class="w-1/2 text-center bg-red-500 text-white py-2 rounded-md cursor-pointer">
                            <button type="submit">Publish</button>
                        </div>
                        <div
                            class="w-1/2 text-center border-orange-400 text-orange-400 border py-2 rounded-md cursor-pointer">
                            <button type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </form> --}}
            @livewire('create-event-preview', ['user' => auth()->user()])
        </div>
    </div>
</div>
<script>
    function addNewLocation(){
        document.getElementById('newLocation').classList.remove('hidden');
        document.getElementById('existedLocation').classList.add('hidden');
    }
    function addExistedLocation(){
        document.getElementById('newLocation').classList.add('hidden');
        document.getElementById('existedLocation').classList.remove('hidden');
    }
</script>
@endsection