<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite('resources/css/app.css')
</head>

<body class="overflow-y-hidden" >
    
    {{-- navbar Mobile --}}
    <nav class="md:hidden lg:mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{asset('assets/img/logos/logo.png')}}" class="h-9 mr-3 sm:h-9" alt="TeamUp Logo" />
                {{-- <span class="self-center text-xl font-semibold whitespace-nowrap :text-white">Flowbite</span> --}}
            </a>

            {{-- <div>
                <ul>
                    <li class="">

                        <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                            class="block py-2 pl-6  pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700"
                            type="button">Mode <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHelperRadio"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 :bg-gray-700 :divide-gray-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 :text-gray-200"
                                aria-labelledby="dropdownHelperRadioButton">

                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 :hover:bg-gray-600">
                                        <div class="flex items-center h-5">
                                            <input x-on:change="mode='leader'" id="helper-radio-4" name="mode"
                                                type="radio" :checked="mode=='leader' ? true : false" value="leader"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-radio-4"
                                                class="font-medium text-gray-900 :text-gray-300">
                                                <div>Leader</div>
                                                <p id="helper-radio-text-4"
                                                    class="text-xs font-normal text-gray-500 :text-gray-300">tombol
                                                    edit, hapus, tambah dan status tim terlihat</p>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 :hover:bg-gray-600">
                                        <div class="flex items-center h-5">
                                            <input id="helper-radio-5" x-on:change="mode='member'" name="mode"
                                                type="radio" :checked="mode=='member' ? true : false" value="member"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-radio-5"
                                                class="font-medium text-gray-900 :text-gray-300">
                                                <div>Member</div>
                                                <p id="helper-radio-text-5"
                                                    class="text-xs font-normal text-gray-500 :text-gray-300">tombol
                                                    edit, hapus, tambah dan status tim tidak terlihat</p>
                                            </label>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </li>
                </ul>
            </div> --}}
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 :focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-4.jpg')}}" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50  bg-white hidden my-4 text-base list-none  divide-y divide-gray-100 rounded-lg shadow :bg-gray-700 :divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 :text-white">John Doe</span>
                        <span
                            class="block text-sm font-medium text-gray-500 truncate :text-gray-400">john@gmail.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li class="border-b">
                            <a href="/profile"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Profile
                                Saya</a>
                        </li>
                        <li class="border-b">
                            <a href="/tim-saya"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Tim
                                Saya</a>
                        </li>
                        <li class="border-b">
                            <a href="/tim-list"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Tim
                                List</a>
                        </li>
                        <li class="border-b">
                            <a href="/tim-channel"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Tim
                                Channel</a>
                        </li>
                        <li class="border-b">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Log
                                out</a>
                        </li>
                    </ul>
                </div>
                {{-- <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 :text-gray-400 :hover:bg-gray-700 :focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button> --}}
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                {{-- <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white :bg-gray-800 md::bg-gray-900 :border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 :text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 :text-gray-400 md::hover:text-white :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 :text-gray-400 md::hover:text-white :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 :text-gray-400 md::hover:text-white :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 :text-gray-400 md::hover:text-white :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Contact</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>

    {{--Navbar MD LG XL--}}
    <nav class="mb-8 hidden md:block mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="{{asset('assets/img/logos/logo.png')}}" class=" h-9 sm:h-9" alt="TeamUp Logo">
                <p class="text-2xl font-bold text-blue-500">TeamUp</p>
              </a>
            <div class="flex md:order-2">

                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 :focus:ring-gray-600"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-4.jpg')}}" alt="user photo">
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatar"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 :bg-gray-700 :divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 :text-white">
                        <div>John Doe
                        </div>
                        <div class="font-medium truncate">john@gmail.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 :text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                        <li>
                            <a href="/profile"
                                class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Profil
                                Saya</a>
                        </li>

            
                    </ul>
                    <div class="py-2">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Logout</a>
                    </div>
                </div>

                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 :text-gray-400 :hover:bg-gray-700 :focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col p-4 mt-4 items-center border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium md:border-0  :bg-gray-800 md::bg-gray-900 :border-gray-700">

                    {{-- <li>
                        <a href="/tim-channel"
                            class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent  md:p-0 :text-white"
                            aria-current="page">Tim channel</a>
                    </li> --}}

                    <li>
                        <a href="/tim-channel"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            Channel</a>
                    </li>
                    
                    <li>
                        <a href="/tim-saya"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 :text-white
                        "
                        aria-current="page">Tim Saya</a>
                    </li>
                    
                    <li>
                        <a href="/tim-list"
                            class="
                            block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            List</a>
                    </li>
                    

                    <li class="">

                        <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                            class=" text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700"
                            type="button">Mode</button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHelperRadio"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 :bg-gray-700 :divide-gray-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 :text-gray-200"
                                aria-labelledby="dropdownHelperRadioButton">

                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 :hover:bg-gray-600">
                                        <div class="flex items-center h-5">
                                            <input x-on:change="mode='leader'" id="helper-radio-4" name="mode"
                                                type="radio" :checked="mode=='leader' ? true : false" value="leader"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-radio-4"
                                                class="font-medium text-gray-900 :text-gray-300">
                                                <div>Leader</div>
                                                <p id="helper-radio-text-4"
                                                    class="text-xs font-normal text-gray-500 :text-gray-300">tombol
                                                    tambah tim terlihat, tombol lamar tim hilang</p>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 :hover:bg-gray-600">
                                        <div class="flex items-center h-5">
                                            <input id="helper-radio-5" x-on:change="mode='member'" name="mode"
                                                type="radio" :checked="mode=='member' ? true : false" value="member"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-radio-5"
                                                class="font-medium text-gray-900 :text-gray-300">
                                                <div>Member</div>
                                                <p id="helper-radio-text-5"
                                                    class="text-xs font-normal text-gray-500 :text-gray-300">tombol
                                                    tambah tim hilang, tombol lamar tim terlihat</p>
                                            </label>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </li>


                </ul>
            </div>
        </div>
    </nav>




<div class="text-poppins mb-10 md:mx-8 lg:mx-10 font-poppins">
    
    <div class="flex flex-col lg:flex-row md:justify-center lg:space-x-8 xl:space-x-8">
        
        
        
        <div class=" lg:w-[70%] relative pb-8">
            <h1 class="text-2xl mx-2 text-blue-500 my-4 font-semibold">Tim Saya</h1>
            <swiper-container class="mySwiper mx-2 lg:mx-0 lg:pl-10 xl:pl-10 py-4 h-[192px] h-max-[192px] lg:h-[400px] lg:max-h-[400px]  lg:rounded-2xl lg:border lg:shadow-md"  pagination-clickable="true" init="false">  
                
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/2.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Mauris Consulting</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/3.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Healthy</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/4.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                <swiper-slide class="h-[160px]">
                    <a href="/tim-channel" class="flex hover:-translate-y-1 hover:scale-110 duration-300 flex-col relative items-center space-y-4 justify-center w-56 h-40 rounded-3xl border-l-4 border-b-2 border-blue-500 shadow-md">
                        <img class="w-20 h-20 rounded-full shadow-md border"
                        src="{{asset('assets/tim/1.png')}}"
                        alt="Neil image">
                        <h1 class="text-sm lg:text-lg  font-semibold ">Connect Technology</h1>
                        
                    </a>
                </swiper-slide>
                
            
                
                
              
                
            </swiper-container>
            <div class="mx-auto swiper-pagination"></div>
        </div>
        
        <div class="flex flex-col bg-white lg:w-[40%]">
            <h1 class="text-2xl mx-2 text-blue-500 my-4 font-semibold">Tugas Hari Ini</h1>
            <div class="flex flex-col shadow-md md:grid md:grid-cols-2 md:gap-4 lg:flex lg:flex-col rounded-2xl lg:h-[400px] py-4 lg:max-h-[400px] overflow-y-auto scrollbar border shadow-md">
                <a href="/tim-channel" class="flex bg-white items-center mx-4 mb-2 rounded-xl h-[80px]  px-4  shadow-md">
                    <div class="flex items-center w-full space-x-4">
                        <div class="w-[20%]">
                            <img class="w-full h-full max-h-[46px] max-w-[46px] rounded-full"
                            src="{{asset('assets/tim/1.png')}}"
                            alt="Neil image">
                        </div>
                        <div class="flex justify-between w-full">
                            <div>
                                <h1 class="text-sm font-semibold">Slicing Design</h1>
                                <p class="text-xs">Frontend</p>
                            </div>
                            <div class="justify-self-end xl:flex">
                                <span
                                class="bg-gray-100 ml-1 text-gray-800 text-xs font-medium inline-flex items-center px-1 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                            </svg>
                            3 hari lagi
                        </span>
                    </div>
                </div>
                
            </div>
        </a>
        <a href="/tim-channel" class="flex bg-white items-center mx-4 mb-2 rounded-xl h-[80px]  px-4  shadow-md">
            <div class="flex items-center w-full space-x-4">
                <div class="w-[20%]">
                    <img class="w-full h-full max-h-[46px] max-w-[46px] rounded-full"
                    src="{{asset('assets/tim/2.png')}}"
                    alt="Neil image">
                </div>
                <div class="flex justify-between w-full">
                    <div>
                        <h1 class="text-sm font-semibold">Membuat Rest API</h1>
                        <p class="text-xs">Backend</p>
                    </div>
                    <div class="justify-self-end  xl:flex">
                        <span
                        class="bg-gray-100 ml-1 text-gray-800 text-xs font-medium inline-flex items-center px-1 py-0.5 rounded ">
                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                        clip-rule="evenodd"></path>
                    </svg>
                    10 hari lagi
                </span>
            </div>
        </div>
        
    </div>
</a>


<a href="/tim-channel" class="flex bg-white items-center mx-4 mb-2 rounded-xl h-[80px]  px-4  shadow-md">
    <div class="flex items-center w-full space-x-4">
        <div class="w-[20%]">
            <img class="w-full h-full max-h-[46px] max-w-[46px] rounded-full"
            src="{{asset('assets/tim/3.png')}}"
            alt="Neil image">
        </div>
        <div class="flex justify-between w-full">
            <div>
                <h1 class="text-sm font-semibold">Design landing page</h1>
                <p class="text-xs">UI/UX</p>
            </div>
            <div class="justify-self-end  xl:flex">
                <span
                class="bg-gray-100 ml-1 text-gray-800 text-xs font-medium inline-flex items-center px-1 py-0.5 rounded ">
                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                clip-rule="evenodd"></path>
            </svg>
            15 hari lagi
        </span>
    </div>
</div>

</div>
</a>

<a href="/tim-channel" class="flex bg-white items-center mx-4 mb-2 rounded-xl h-[80px]  px-4  shadow-md">
    <div class="flex items-center w-full space-x-4">
        <div class="w-[20%]">
            <img class="w-full h-full max-h-[46px] max-w-[46px] rounded-full"
            src="{{asset('assets/tim/2.png')}}"
            alt="Neil image">
        </div>
        <div class="flex justify-between w-full">
            <div>
                <h1 class="text-sm font-semibold">Menyusun SRS</h1>
                <p class="text-xs">System Analyst</p>
            </div>
            <div class="justify-self-end  xl:flex">
                <span
                class="bg-gray-100 ml-1 text-gray-800 text-xs font-medium inline-flex items-center px-1 py-0.5 rounded ">
                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                clip-rule="evenodd"></path>
            </svg>
            30 hari lagi
        </span>
    </div>
</div>

</div>
</a>
<a href="/tim-channel" class="flex bg-white items-center mx-4 mb-2 rounded-xl h-[80px]  px-4  shadow-md">
    <div class="flex items-center w-full space-x-4">
        <div class="w-[20%]">
            <img class="w-full h-full max-h-[46px] max-w-[46px] rounded-full"
            src="{{asset('assets/tim/4.png')}}"
            alt="Neil image">
        </div>
        <div class="flex justify-between w-full">
            <div>
                <h1 class="text-sm font-semibold">Membuat DFD</h1>
                <p class="text-xs">Data Engineer</p>
            </div>
            <div class="justify-self-end  xl:flex">
                <span
                class="bg-gray-100 ml-1 text-gray-800 text-xs font-medium inline-flex items-center px-1 py-0.5 rounded ">
                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                clip-rule="evenodd"></path>
            </svg>
            30 hari lagi
        </span>
    </div>
</div>

</div>
</a>

</div>
</div>
</div>
</div>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
{{-- <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        slidesPerView: 3,
        direction: 'horizontal',
        loop: true,
        
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        
        
    });
</script> --}}

<script>
    const swiperEl = document.querySelector('swiper-container');
    // const swipeeer = swiperEl.swiper;
    
    // var appendNumber = 4;
    // var prependNumber = 1;
    
    // swiper parameters
    const swiperParams = {
        slidesPerView: 1,
        
        pagination: {
            el: '.swiper-pagination',
        },
        loop:false,
        breakpoints: {
            300:{
                slidesPerView: 2,
                spaceBetween:150,
                grid:{
                    rows: 1,
                    fill: "row",
                },
            },
            400:{
                spaceBetween:100,
                grid:{
                    rows: 1,
                    fill: "row",
                },
            },
            600: {
                slidesPerView: 3,
                spaceBetween: 50,
                grid:{
                    rows: 1,
                    fill: "row",
                },
            },
            850: {
                slidesPerView: 3,
                spaceBetween: 50,
                grid:{
                    rows: 1,
                    fill: "row",
                },
            },
            1024:{
                slidesPerView:3,
                grid:{
                    rows: 2,
                    fill: "row",
                },
                spaceBetween: 30,
            },
            1200:{  
                slidesPerView: 3,
                spaceBetween:30,
                grid:{
                    rows: 2,
                    fill: "row",
                },
            },
            1400:{
                slidesPerView: 4,
                grid:{
                    rows: 2,
                    fill: "row",
                },
            }
        },
    };
    
    // now we need to assign all parameters to Swiper element
    Object.assign(swiperEl, swiperParams);
    
    // and now initialize it
    swiperEl.initialize();
    
</script>
</body>

</html>