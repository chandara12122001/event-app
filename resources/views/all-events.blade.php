@extends('app-layout.app')
@section('content')
    {{-- Start filter --}}
        <div class="my-10">
            <div class="flex flex-col space-y-5">
                <div class="flex flex-row space-x-5  w-full items-center justify-center uppercase">
                    <div class="rounded-full border bg-white border-gray-500">
                        <div class="flex flex-row space-x-7 justify-around">
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                All
                            </div>
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                local
                            </div>
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                internation
                            </div>
                        </div>
                    </div>
                
                    <div class="rounded-full border border-gray-500 bg-white">
                        <div class="flex flex-row space-x-7">
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                All
                            </div>
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                free
                            </div>
                            <div class="p-2 px-7 hover:border hover:bg-green-400 hover:text-white rounded-full cursor-pointer">
                                paid
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="date" class="p-2 rounded-full border-gray-500 border">
                    </div>
                </div>
            </div>
            
        </div>
    {{-- End filter --}}
@endsection