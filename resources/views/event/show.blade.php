@extends('app-layout.app')
@section('content')
{{-- Start event feature --}}
    <div class="mb-10">
       <div style="background-image: url(http://www.un.org/development/desa/disabilities/wp-content/uploads/sites/15/2019/06/48043813818_beb22ab25e_k.jpg)"
       class="bg-cover bg-center pt-1/6">
        <div class="bg-gradient-to-t from-gray-900 to-transparent w-full h-full">
            <div class="px-36 py-10 flex flex-col space-y-5">
                <div class="text-3xl text-white font-bold">
                    <h1>Impact of Big Data Development in Cambodia</h1>
                </div>
                <div class="text-white">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi adipisci quaerat tempora ipsa voluptates sapiente ea ipsum quas modi earum. Nostrum iusto alias cupiditate nobis natus excepturi culpa ducimus, ex, voluptatem sunt unde optio, aperiam fugiat sed aut! Nesciunt magnam sunt hic sed voluptatum aperiam culpa veniam delectus, fugiat harum reprehenderit, commodi at ullam neque nisi odio totam possimus! Amet ducimus ipsum sunt, sapiente libero eos minus porro provident impedit, quae ratione iusto reiciendis, itaque accusamus ut quibusdam sint rerum. Fugiat, ab eaque est eos quibusdam dolor illum voluptatum repellendus nulla fugit doloremque consequuntur laborum id. Quisquam officiis reiciendis aperiam!</p>
                </div>
            </div>
        </div>
       </div>
    </div>
{{-- End event feature --}}
{{-- Start facilities --}}
    <div class="m-10 px-56">
        <div class="flex flex-row space-x-28 items-center justify-center text-xl">
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-wifi"></i>
                </div>
                <div>
                    <p>WiFi Access</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div>
                    <p>Refreshment</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-restroom"></i>
                </div>
                <div>
                    <p>Restroom</p>
                </div>
            </div>
            <div class="flex flex-col space-y-2 items-center justify-center">
                <div class="text-orange-400 text-2xl">
                    <i class="fa-solid fa-book"></i>`
                </div>
                <div>
                    <p>Support Document</p>
                </div>
            </div>
        </div>
    </div>
{{-- End facilities --}}
{{-- Start important info --}}
    <div class="m-10 px-56">
        <div class="flex flex-row space-x-28 border border-orange-400 rounded-md p-10 items-center justify-center">
            <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="text-gray-900">
                    <p>Raffel Hotel Cambodia</p>
                </div>
            </div>
            <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                <div>
                    <i class="fa-solid fa-calendar-day"></i>
                </div>
                <div class="text-gray-900">
                    <p>25 July 2022</p>
                </div>
            </div>
            <div class="flex flex-row space-x-5 text-orange-400 items-center justify-center text-xl">
                <div>
                    <i class="fa-solid fa-ticket"></i>
                </div>
                <div class="text-gray-900">
                    <p>$5 / person</p>
                </div>
            </div>
        </div>
    </div>
{{-- End important info --}}
{{-- Start description --}}
    <div class="m-10 px-56">
        <div class="flex flex-col space-y-6">
            <div class="text-xl text-gray-800 font-bold">
                <p>Description</p>
            </div>
            <div class="w-full text-justify">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sapiente voluptate expedita doloremque eveniet hic, voluptatibus quam cum repellat facilis assumenda repellendus. Quas inventore vero atque, velit delectus earum ipsum quibusdam ratione, dolorum quasi sapiente id quis, dicta numquam iste praesentium? Corrupti rerum debitis similique eum saepe, aspernatur incidunt explicabo nulla aliquid qui repellat animi suscipit, unde mollitia odio ipsum nisi itaque, perspiciatis vitae nobis labore aliquam illo sequi. Necessitatibus, quia. Odit sapiente modi doloremque quae optio, laudantium distinctio voluptates laborum quaerat? Corporis saepe excepturi doloribus delectus aut omnis nemo tenetur eligendi, explicabo enim distinctio dolor sit deserunt reprehenderit eveniet alias a pariatur est optio officia atque? Recusandae ipsam numquam cum sapiente debitis temporibus ad earum fugiat neque atque provident nemo, distinctio et corrupti. Natus rerum corporis, saepe cum itaque est sint quisquam officiis perferendis? Placeat magnam soluta molestiae est! Itaque perferendis, earum non quisquam est officia? Incidunt, iste id!</p>
            </div>
        </div>
    </div>
{{-- End description --}}
{{-- Start detail info --}}
    <div class="m-10 px-56">
        <div class="flex flex-row space-x-10">
            <div class="w-1/2">
                <div class="flex flex-col space-y-3">
                    <div class="w-full rounded-md text-center p-2 bg-red-400 text-white">
                        <div class="flex flex-row space-x-3 items-center justify-center text-lg">
                            <div>
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <p>View on map</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-md shadow-md">
                        <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                <div class="flex flex-col space-y-5">
                    <div class="flex flex-col border border-green-400 rounded-md w-full h-1/2">
                        <div class="flex flex-row space-x-3 p-3 w-full items-center">
                            <div class="text-green-400">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                Ray Chann Udam
                            </div>
                            <div class=" flex-grow flex flex-row justify-end text-white relative right-0">
                                <div class=" bg-green-400 rounded-md p-2">
                                    <p>Organizer</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-3 p-3">
                            <div class="text-green-400">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                (855)-17-701-656
                            </div>
                        </div>
                        <div class="flex flex-row space-x-3 p-3">
                            <div class="text-green-400">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                channudamray2002.rcu@gmail.com
                            </div>
                        </div> 
                    </div>
                    <div class="flex flex-col rounded-md w-full h-1/2">
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div>
                                <p>500 people is going</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <p>250 people is interested</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-5 p-3">
                            <div class="text-red-400">
                                <i class="fa-solid fa-chair"></i>
                            </div>
                            <div>
                                <p>$20 seats are available  </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="w-1/3 p-2 text-center text-white rounded-md bg-orange-400 rounded-tr-none rounded-br-none">
                            Interested
                        </div>
                        <div class="w-2/3 p-2 text-center text-white rounded-md bg-red-400 rounded-tl-none rounded-bl-none">
                            Going
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End detail info --}}
@endsection