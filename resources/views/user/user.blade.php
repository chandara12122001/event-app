@section('css')
<link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
@endsection
@extends('app-layout.app')
@section('content')
<div class=" m-10 sm:mx-36 mx-10">
    <div class="border rounded-lg bg-cover bg-center sm:w-full sm:h-60 w-full h-32 p-5 flex flex-row space-x-3 items-center justify-center"
        style="background-image:url('https://images.hdqwalls.com/wallpapers/sunset-beautiful-painting.jpg')">
        <div id="profile" class=" bg-red-500 sm:w-40 sm:h-40 w-24 h-24 rounded-full bg-cover bg-top"
            style="background-image: url({{Storage::url(auth()->user()->profile->last()->image)}})">
        </div>
        <div id="profielDropdownMenu" class="toggle">
            <ul>
                <li>
                    <button id="myImg">view profile</button>
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01"
                            src="{{Storage::url(auth()->user()->profile->last()->image)}}">
                        <div id="caption"></div>
                    </div>
                </li>
                <li>
                    <a href="">edit profile</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="m-10 sm:mx-36 mx-10">
    <div class="flex flex-row space-x-5 w-full">
        <div class="w-1/3 flex flex-col space-y-5 text-lg p-7 border rounded-lg text-white bg-gray-700">
            <div>
                <p>Name: Ray Channudam</p>
            </div>
            <div>
                <p>Email: channudamray2002.rcu@gmail.com</p>
            </div>
            <div>
                <p>Tel: (855)-17-701-656</p>
            </div>
        </div>
    </div>
</div>
{{-- Events --}}
<div class="m-10 sm:mx-36 mx-10">
    <div class="flex flex-col space-y-10">
        <div class=" grid md:grid-cols-3 gap-4 grid-cols-1">
            @for($i=0; $i<10; $i++) <div class="flex flex-row shadow-md rounded-md">
                <div class="w-1/3 h-full p-3 bg-center bg-cover rounded-tl-md rounded-bl-md"
                    style="background-image:url('https://www.eccc.gov.kh/sites/default/files/inline-images/IMG-20220217-WA0008%20%28002%29.jpg')">
                </div>
                <div class="flex flex-col space-y-3 w-2/3 p-3">
                    <div class="text-xl font-bold">
                        <h1>Title</h1>
                    </div>
                    <div>
                        <p>Description</p>
                    </div>
                    <div>
                        <div class="flex flex-row space-x-4 items-center">
                            <div class="bg-green-500 rounded-md py-1 px-2 text-white">
                                <p>$ Price</p>
                            </div>
                            <div class="flex flex-row space-x-2 items-center">
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p>Location</p>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-2 items-center">
                                <div>
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div>
                                    <p>Date</p>
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
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>
@endsection

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