{{-- Start Header --}}
<div class="w-full min-w-min-content py-3 px-52 bg-white sticky top-0">
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
                <div class="px-3 py-5 hover:bg-red-400 hover:text-white hover:cursor-pointer">
                    <a href="/">home</a>
                </div>
                <div class="px-3 py-5 hover:bg-red-400 hover:text-white hover:cursor-pointer">
                    <a href="{{route('allevents')}}">all events</a>
                </div>
                <div class="px-3 py-5 hover:bg-red-400 hover:text-white hover:cursor-pointer">
                    <a href="event/create">post event</a>
                </div>
                <div class="px-3 py-5 hover:bg-red-400 hover:text-white hover:cursor-pointer">
                    <a href="/">about us</a>
                </div>
                <div class="px-3 py-5 hover:bg-red-400 hover:text-white hover:cursor-pointer">
                    <a href="/">contact us</a>
                </div>
            </div>
        </div>
    </nav>
</div>
{{-- End Header --}}