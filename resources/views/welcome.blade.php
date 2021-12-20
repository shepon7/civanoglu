<x-guest-layout>
    <div class="relative z-10 pt-36 pb-44" style="background-image: url(/img/bg-hero.jpeg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl mb-5">Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Repellendus, exercitationem?</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="py-32 text-center">
        <div class="container">
            <h2 class="font-bold text-4xl mb-6">Lorem, ipsum dolor sit amet consectetur<br/> adipisicing elit. Soluta eaque excepturi <span class="underline">consequatur harum!</span></h2>
            <p class="font-bold text-gray-500 text-2xl mb-10">Lorem ipsum dolor sit amet consectetur elit. Nostrum impedit fugit non.</p>
            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">Start the review</a>

            <h2 class="font-bold text-4xl mb-6 mt-20">Lorem, ipsum dolor sit amet consectetur<br/> adipisicing elit. Soluta <span class="underline">consequatur harum!</span></h2>
        </div>
    </div>

    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure laborum nemo
                    non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem sapiente
                    voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure
                    laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem
                    sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti
                    ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt
                    officiis rem sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    deleniti ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum
                    incidunt officiis rem sapiente voluptate</p>
            </div>
            <div class="flex-1 ml-10">
                <img class="rounded" src="/img/bg-hero.jpeg" alt="">
            </div>
        </div>
    </div>

    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn">Start searching with filters</a>
            <p class="mx-10">or</p>
            <a href="" class="btn-outline">Start searching on the map</a>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">Last added objusts</h2>
        <div class="flex flex-wrap -mx-2 justify-between mt-10">
            @foreach($latest_properties as $property)
                <div class="flex-1 mx-2 shadow-lg relative mb-6 rounded-md">
                    <a href=""
                       class="absolute left-3 w-9 h-9 leading-10 self-center text-base top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full text-base"><i
                            class="fa fa-heart-o"></i></a>
                    <div class="py-20 bg-center" style="background-image: url('/img/bg-hero.jpeg')"></div>
                    <div class="p-3">
                        <h2 class="leading-0 text-base">{{$property->name}}</h2>
                        <h3 class="text-2xl py-3">{{ number_format($property->price, 2, ',', ',' )}} TL</h3>
                        <div class="border-t-2">
                            <ul class="flex items-center -mx-1 my-4">
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->beadrooms}} beadrooms</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} bathrooms</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->net_sqm}} ft<sup>2</sup></li>
                            </ul>
                            <a href="{{route('single-property', $property->id)}}" class="btn w-full text-center">More details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>