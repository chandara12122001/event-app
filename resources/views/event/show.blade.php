{{-- header --}}
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<section>
    {{-- hero container --}}
    <div>
        {{-- z-index -1 --}}
        <img src="" alt="">
        <div>
            <h4></h4>
            <p></p>
        </div>
    </div>
    {{-- offers section --}}
    <div>
        <div>
            <img src="{{asset('wifi.png')}}" alt="">
            <p>Wifi Access</p>
        </div>
        <div>
            <img src="{{asset('coffee.png')}}" alt="">
            <p>Refreshment</p>
        </div>
        <div>
            <img src="{{asset('restroom.png')}}" alt="">
            <p>Restroom</p>
        </div>
        <div>
            <img src="{{asset('book.png')}}" alt="">
            <p>Materials</p>
        </div>
    </div>
    {{-- info-header section --}}
    {{-- need border1px color orange --}}
    <div>
        <div>
            <img src="{{asset('Vector.png')}}" alt="">
            <p style="display: inline">Location name</p>
        </div>
        <div>
            <img src="{{asset('calendar-day.png')}}" alt="">
            <p>Event date</p>
        </div>
        <div>
            <img src="{{asset('ticket-alt.png')}}" alt="">
            <p>event price</p>
        </div>
    </div>

    {{-- main-info section --}}
    <div>
        <div>
            <h5>Description</h5>
            <p>Event.description</p>
        </div>
        {{-- map --}}
        <div></div>
        {{--  --}}
        <div>
            {{-- oraganizer --}}
            <div>
                <p>Organizer</p>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <p>user.name</p>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <p>user.phone</p>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <p>user.email</p>
                </div>
            </div>
            {{-- event info --}}
            <div>
                <i class="fa-solid fa-calendar-check"></i>
                <p>event.going</p>
            </div>
            <div>
                <i class="fa-solid fa-star"></i>
                <p>event.intereted</p>
            </div>
            <div>
                <i class="fa-solid fa-chair"></i>
                <p>event.seats</p>
            </div>
        </div>
    </div>

    {{-- related events --}}
    <div>
        {{-- randomly display events --}}
    </div>

    
</section>

{{-- footer --}}