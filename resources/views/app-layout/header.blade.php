{{-- Start Header --}}
@section('css')
<link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection
<div class="w-full min-w-min-content py-3 sm:px-52 px-5 bg-white sticky top-0 z-10">
    <nav class="uppercase text-xl">
        <div class="flex flex-row sm:space-x-5 space-x-2 items-center justify-evenly">
            <div>
                <div class=" w-48 justify-self-start">
                    <a href="/">
                        <img class=" rounded-xl" src="{{asset('storage/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="flex flex-row justify-end items-center space-x-10 min-w-min-content">
                    <div class="px-3 py-5 link">
                        <a href="/">home</a>
                    </div>
                    <div class="px-3 py-5 link">
                        <a href="{{route('allevents')}}">all events</a>
                    </div>
                    <div class="px-3 py-5 link">
                        <a href="event/new">post event</a>
                    </div>
                    <div class="px-3 py-5 link">
                        <a href="/">about us</a>
                    </div>
                    <div class="px-3 py-5 link">
                        <a href="/">contact us</a>
                    </div>
                    <div class="flex flex-row p-2 capitalize text-white bg-blue-500 rounded-md space-x-3 items-center">
                        @auth
                        <div class=" link">
                            @if (auth()->user()->avatar)
                            <img src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}">
                            @endif
                            <a href="">{{auth()->user()->username}}</a>
                        </div>
                        <div class=" link">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                        @endauth
                        @guest
                        <div class=" link bg-white text-blue-500 p-1 px-3 rounded-md">
                            <a href="{{route('login')}}">Login</a>
                        </div>
                        <div class=" link">
                            <a href="{{route('register')}}">Register</a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="block lg:hidden">
                <div class="border-none bg-blue-500 text-white p-3 flex space-x-3 rounded-md text-lg cursor-pointer" onclick="smallNavClicked()">
                    <div>
                        <i class="fa-solid fa-grip"></i>
                    </div>
                    <div>
                        Menu
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="flex-col justify-end items-center space-y-5 min-w-min-content absolute bg-white right-0 uppercase hidden p-3" id="small-nav">
    <div class="px-3 py-5 absolute right-0 text-red-500 text-lg cursor-pointer" onclick="classSmallMenu()">
        <i class="fa-solid fa-circle-xmark"></i>
    </div>
    <div class="px-3 py-5 link">
        <a href="/">home</a>
    </div>
    <div class="px-3 py-5 link">
        <a href="{{route('allevents')}}">all events</a>
    </div>
    <div class="px-3 py-5 link">
        <a href="event/new">post event</a>
    </div>
    <div class="px-3 py-5 link">
        <a href="/">about us</a>
    </div>
    <div class="px-3 py-5 link">
        <a href="/">contact us</a>
    </div>
    <div class="flex flex-row p-2 capitalize text-white bg-blue-500 rounded-md space-x-3 items-center">
        @auth
        <div class=" link">
            @if (auth()->user()->avatar)
            <img src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}">
            @endif
            <a href="">{{auth()->user()->username}}</a>
        </div>
        <div class=" link">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
        @endauth
        @guest
        <div class=" link bg-white text-blue-500 p-1 px-3 rounded-md">
            <a href="{{route('login')}}">Login</a>
        </div>
        <div class=" link">
            <a href="{{route('register')}}">Register</a>
        </div>
        @endguest
    </div>
</div>

<script>
    function smallNavClicked(){
        document.getElementById('small-nav').classList.remove('hidden');
    }
    function classSmallMenu(){
        document.getElementById('small-nav').classList.add('hidden');
    }
</script>


{{-- End Header --}}