@extends('app-layout.app')
@section('content')
    <div class="h-screen flex flex-col items-center justify-center">
        <div class="w-full">  
            <form action="" method="PUT">
                @csrf
                <div class="flex flex-col space-y-5 w-full items-center justify-center p-10">
                    <div class="text-center text-xl font-bold p-3 bg-orange-400 rounded-md text-white w-1/4 my-10">
                        <p>Edit user profile</p>
                    </div>
                    <div class="w-full text-center">
                        <input type="text" class="p-3 outline-none rounded-md w-1/4" placeholder="Enter new name...">
                    </div>
                    <div class="w-full text-center">
                        <input type="text" class="p-3 outline-none rounded-md w-1/4" placeholder="Enter old password...">
                    </div>
                    <div class="w-full text-center">
                        <input type="text" class="p-3 outline-none rounded-md w-1/4" placeholder="Enter new password...">
                    </div>
                    <div class="w-full text-center">
                        <input type="text" class="p-3 outline-none rounded-md w-1/4" placeholder="Conf irm new password...">
                    </div>
                    <div class="w-1/4 text-center p-2 rounded-md text-white bg-red-500">
                        <button type="submit" class="w-full">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection