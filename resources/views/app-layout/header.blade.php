{{-- Start Header --}}
@section('css')
<link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection
<div class="w-full min-w-min-content py-3 px-52 bg-white sticky top-0 z-10">
    <nav class="uppercase text-xl">
        <div class="flex flex-row space-x-5 items-center justify-between">
            <div>
                <div class=" w-48 justify-self-start">
                    <a href="/">
                        <img class=" rounded-xl" src="{{asset('storage/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-end items-center space-x-10 min-w-min-content">
                <div class="px-3 py-5 link">
                    <a href="/">home</a>
                </div>
                <div class="px-3 py-5 link">
                    <a href="{{route('allevents')}}">all events</a>
                </div>
                <div class="px-3 py-5 link">
                    <a href="event/create">post event</a>
                </div>
                <div class="px-3 py-5 link">
                    <a href="/">about us</a>
                </div>
                <div class="px-3 py-5 link">
                    <a href="/">contact us</a>
                </div>
                @auth
                    <div class="px-3 py-5 link">
                        <a href="">{{auth()->user()->username}}</a>
                    </div>
                    <div class="px-3 py-5 link">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                @endauth
                @guest
                <div class="px-3 py-5 link">
                    <a href="{{route('login')}}">Login</a>
                </div>
                <div class="px-3 py-5 link">
                    <a href="{{route('register')}}">Register</a>
                </div>
                @endguest
            </div>
        </div>
    </nav>
</div>
{{-- End Header --}}