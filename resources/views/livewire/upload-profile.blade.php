{{-- {{dd(auth()->user()->events)}} --}}

<div>
    <div class=" m-10 sm:mx-36 mx-10">
        <div class="border rounded-lg bg-cover bg-center sm:w-full sm:h-60 w-full h-32 p-5 flex flex-row space-x-3 items-center justify-center"
            style="background-image:url('https://images.hdqwalls.com/wallpapers/sunset-beautiful-painting.jpg')">
            @if ($photo)
            {{-- <img src="{{ $photo->temporaryUrl() }}" style="width: 300px;height:300px"> --}}
            <div id="profile" class=" bg-gray-500 sm:w-40 sm:h-40 w-24 h-24 rounded-full bg-cover bg-top"
                style="background-image: url({{$photo->temporaryUrl()}})">
            </div>
            @else
            @if (auth()->user()->profile->isNotEmpty())
            <div id="profile" class=" bg-gray-500 sm:w-40 sm:h-40 w-24 h-24 rounded-full bg-cover bg-top"
                style="background-image: url({{Storage::url(auth()->user()->profile->last()->image)}})">
            </div>
            @endif
            @endif
            <div id="profielDropdownMenu" class="toggle">
                <ul>
                    <li>
                        <button id="myImg">view profile</button>
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            @if (auth()->user()->profile->isNotEmpty())
                            <img class="modal-content" id="img01"
                                src="{{Storage::url(auth()->user()->profile->last()->image)}}">
                            <div id="caption"></div>
                            @endif
                        </div>
                    </li>
                    <li>
                        <form wire:submit.prevent="save">
                            <input type="file" wire:model="photo">

                            @error('photo') <span class="error">{{ $message }}</span> @enderror

                            <button type="submit">Edit profile</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-10 sm:mx-36 mx-10">
        <div class="flex flex-row space-x-5">
            <div class="w-1/3 flex flex-col space-y-5 text-lg p-7 border rounded-lg text-white bg-gray-700">
                <div>
                    <p>Name: {{auth()->user()->name}}</p>
                </div>
                <div>
                    <p>Email: {{auth()->user()->email}}</p>
                </div>
                @if (auth()->user()->phone_number)
                <div>
                    <p>Tel: {{auth()->user()->phone_number}}</p>
                </div>
                @endif
            </div>
            <div class="w-1/3 flex flex-col space-y-5 text-lg p-7 border rounded-lg text-white bg-gray-700">
                <div class="flex flex-row space-x-3 text-xl">
                    <div>
                        <i class="fa-solid fa-gear"></i>
                   </div>
                   <div>
                        <p>Setting</p>
                   </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="flex flex-row space-x-3 p-3 bg-white text-gray-700 rounded-md">
                    <div>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div>
                        <a href="updateProfile">Edit Name</a>
                    </div>
                </div>
                <div class="flex flex-row space-x-3 p-3 bg-white text-gray-700 rounded-md">
                    <div>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div>
                        <p>Edit Passwword</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Events --}}
    <div class="m-10 sm:mx-36 mx-10">
        <div class="flex flex-col space-y-10">
            <div class=" grid md:grid-cols-3 gap-4 grid-cols-1">
                @foreach (auth()->user()->events as $event)
                <div class="flex flex-row shadow-md rounded-md">
                    <div class="w-1/3 h-full p-3 bg-center bg-cover rounded-tl-md rounded-bl-md"
                        style="background-image:url('https://www.eccc.gov.kh/sites/default/files/inline-images/IMG-20220217-WA0008%20%28002%29.jpg')">
                    </div>
                    <div class="flex flex-col space-y-3 w-2/3 p-3">
                        <div class="text-xl font-bold">
                            <h1>{{$event->title}}</h1>
                        </div>
                        <div>
                            <p>{{$event->description}}</p>
                        </div>
                        <div>
                            <div class="flex flex-row space-x-4 items-center">
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
                                    <p>{{$event->going}} people going</p>
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
    </div>
</div>


@push('scripts')
<script type="text/javascript">
    const profileClicked = document.getElementById('profile')
        profileClicked.addEventListener("click", updateProfile)
        dropdownProfile = document.getElementById('profielDropdownMenu')
        var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
const img = document.getElementById("myImg");
const modalImg = document.getElementById("img01");
const captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modelImg.style.borderRadius = "20px";
}

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

function updateProfile(){
    dropdownProfile.classList.toggle('toggle')
}
</script>
@endpush