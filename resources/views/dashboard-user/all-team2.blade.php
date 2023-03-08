<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    {{-- FilePond --}}
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
    />
    
    {{-- alphinejs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    
    {{-- <!-- Modal toggle -->
        <button data-modal-target="modalTim" data-modal-toggle="defaultModal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Toggle modal
        </button>
        
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Terms of Service
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </div>
            </div>
        </div> --}}
        
        {{-- navbar Mobile --}}
        <nav class="md:hidden lg:mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center md:order-2">
                    <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none  divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                    <span
                    class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                    </li>
                </ul>
            </div>
            {{-- <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="#"
            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
            aria-current="page">Home</a>
        </li>
        <li>
            <a href="#"
            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="#"
            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
            <a href="#"
            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
        </li>
        <li>
            <a href="#"
            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
    </ul> --}}
</div>
</div>
</nav>

{{--Navbar MD LG XL--}}
<nav class="hidden md:block mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex md:order-2">
            
            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
        </button>
        
        <!-- Dropdown menu -->
        <div id="dropdownAvatar"
        class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>Bonnie Green</div>
            <div class="font-medium truncate">name@flowbite.com</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownUserAvatarButton">
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
        </li>
    </ul>
    <div class="py-2">
        <a href="#"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
        out</a>
    </div>
</div>

<button data-collapse-toggle="navbar-cta" type="button"
class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
        aria-current="page">Home</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
    </li>
</ul>
</div>
</div>
</nav>


{{-- banner Mobile --}}
<section id="banner-mobile" class="fixed shadow-xl xl:hidden top-0 bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 h-[30vh] w-full -z-40 max-h-[30vh] rounded-b-[6rem] ">
    
    <h1 class="text-xl absolute text-center text-white top-[30%] flex w-full justify-center font-bold font-poppins">Ayo Buat atau Join Tim Impianmu di TeamUp</h1>
    {{-- <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-white text-center bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-yellow-200 via-red-500 to-fuchsia-500 hover:from-yellow-300 hover:via-red-600 hover:to-fuchsia-600  border-gray-300 xl:absolute xl:left-[48%] xl:top-[60%] rounded-2xl  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-cyan-200 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Buat Tim </button> --}}
    <div id="search" class="w-[90%] bg-white shadow-md absolute bottom-0 left-[5%] rounded-2xl ">
        
        <div class="xl:flex xl:h-full xl:items-center">
            
            <form class="xl:w-full xl:h-full ">
                <div class="flex  xl:h-full">
                    
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-white text-center bg-gradient-to-r from-cyan-200 to-cyan-400 hover:from-cyan-200 hover:to-cyan-300 border-gray-300 rounded-l-2xl  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-cyan-200 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filter <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="relative w-full xl:h-full">
                        <input type="search" id="search-dropdown" class="block xl:h-full p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-2xl border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit" class="absolute xl:h-full top-0 right-0 p-2.5 text-sm font-medium text-white bg-gradient-to-r from-cyan-200 to-cyan-400 rounded-r-2xl  hover:from-cyan-200 hover:to-cyan-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-5 h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</section>
{{-- banner XL--}}
<section id="banner" class="hidden xl:block w-5/6 xl:mx-auto relative xl:h-96 bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 shadow-xl rounded-3xl">
    <div id="anim-container" class="w-[50%]  h-full  absolute -left-10">
        {{-- <img class="" src="{{asset('assets/tim/women.png')}}" alt=""> --}}
    </div>
    {{-- <h1 class="px-3 text-transparent bg-clip-text bg-gradient-to-r from-purple-800 via-red-500 to-yellow-500 mx-auto text-center mt-24  pt-26 sm:pt-28 xl:pt-36 sm:w-[64%] sm:mt-4 sm: text-4xl md:text-5xl lg:text-6xl xl:text-[84px] sm:text-[40px] font-bold font-poppins">Be a Leader or Member</h1> --}}
    <h1 class="xl:text-[40px] absolute xl:left-80 xl:top-20 text-center text-white  xl:w-[50%] font-bold font-poppins">Ayo Buat atau Join Tim Impianmu di TeamUp</h1>
    <button data-modal-target="modalTim" data-modal-toggle="modalTim" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-white text-center bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-yellow-200 via-red-500 to-fuchsia-500 hover:from-yellow-300 hover:via-red-600 hover:to-fuchsia-600  border-gray-300 xl:absolute xl:left-[48%] xl:top-[60%] rounded-2xl  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-cyan-200 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Buat Tim </button>
    <div id="search" class="xl:w-3/4 xl:mx-auto xl:h-16 bg-white shadow-md absolute xl:-bottom-9 left-[12.5%]  rounded-2xl ">
        <div class="xl:flex xl:h-full xl:items-center">
            
            <form class="xl:w-full xl:h-full ">
                <div class="flex  xl:h-full">
                    
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-white text-center bg-gradient-to-r from-cyan-200 to-cyan-400 hover:from-cyan-200 hover:to-cyan-300 border-gray-300 rounded-l-2xl  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-cyan-200 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filter <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="relative w-full xl:h-full">
                        <input type="search" id="search-dropdown" class="block xl:h-full p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-2xl border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit" class="absolute xl:h-full top-0 right-0 p-2.5 text-sm font-medium text-white bg-gradient-to-r from-cyan-200 to-cyan-400 rounded-r-2xl  hover:from-cyan-200 hover:to-cyan-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-5 h-5 mt-1"xl: fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</section>



{{-- Tim Card --}}
<section class="mt-44 max-h-[50vh] fixed bottom-20  overflow-y-auto mx-auto grid grid-cols-1 gap-y-2 md:grid-cols-2 md:static md:mt-80 md:max-h-full  xl:w-[80%] xl:mt-20  xl:grid xl:grid-cols-2 xl:gap-x-40 xl:overflow-visible xl:gap-y-4" id="card">
    
    <div class="block mx-2 py-4 xl:mx-auto h-[150px] xl:w-[500px] xl:h-[250px] xl:py-6 bg-white border border-gray-200 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="flex p-1 items-center xl:w-[120%] xl:flex-row relative xl:top-0 xl:-left-20 xl:h-full xl:items-center ">
            
            <div class="w-[20%] h-[100%]  relative self-start  mx-auto order-1  xl:order-1 xl:mt-0 xl:w-[40%] xl:h-[100%] max-h-full rounded-2xl ">
                <img src="{{asset('/assets/tim/1.png')}}" class="w-full h-full max-h-[80px]  sm:max-h-full sm:max-w-full  xl:max-w-full xl:max-h-full rounded-2xl" alt="">
                {{-- <img src="{{asset('/assets/tim/1.png')}}" class="min-h-[60px] min-w-[60px] max w-full h-full rounded-2xl" alt=""> --}}
                {{-- <button class="text-xs p-2 max-w-[80px] rounded-md left-2 mt-2 sm:-mt-6 sm:left-8 xl:rounded-2xl text-white absolute shadow-md xl:p-4 flex justify-center bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 xl:text-sm xl:font-medium xl:-mt-9 xl:mx-auto xl:text-center xl:left-16">Lamar</button> --}}
                <button class="absolute w-full top-full  text-xs p-2 rounded-md mt-2 sm:-mt-6 sm:w-[80%] sm:left-3 md:mt-2 md:left-0 md:w-full lg:-mt-6 lg:w-[80%] lg:left-2 xl:rounded-2xl text-white  shadow-md xl:p-4 bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 xl:text-sm xl:font-medium xl:-mt-9 xl:mx-auto xl:text-center  xl:w-1/2 xl:left-12">Lamar</button>
            </div>
            
            <div id="konten-card1-1" class="px-2 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
                <h1 class="font-bold text-sm  font-poppins xl:text-lg xl:-mt-6 text-center">Tim Titik Koma</h1>
                <p class="px-2 text-xs text-justify  xl:text-base font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod corporis optio eius fugit quidem omnis dolores doloremque voluptas quibusdam. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            
            <div id="konten-card1-2" class="hidden  px-1 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
                <h1 class="text-sm -mt-2 xl:text-lg font-bold font-poppins xl:-mt-6 text-center">Lowongan & Kualifikasi</h1>
                <div class="px-2 overflow-y-auto grid grid-cols-2 gap-1 min-[450px]:grid-cols-3 max-h-[96px] xl:max-h-[170px] xl:overflow-y-auto">
                    <div>
                        <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                        class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Frontend Developer
                        <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div>
                <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Frontend Developer
                <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div>
        <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
        Frontend Developer
        <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
</button>
</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>

</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>


</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>

</div>

{{-- modal button --}}
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
<div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Frontend Developer
        </h3>
        <button type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="defaultModal">
        <svg aria-hidden="true" class="w-5 h-5 mt-1"xl: fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Close modal</span>
</button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        With less than a month to go before the European Union enacts new consumer
        privacy laws for its citizens, companies around the world are updating their
        terms of service agreements to comply.
    </p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
        effect on May 25 and is meant to ensure a common set of data rights in the
        European Union. It requires organizations to notify users as soon as possible of
        high-risk data breaches that could personally affect them.
    </p>
</div>
<!-- Modal footer -->
<div
class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
<button data-modal-hide="defaultModal" type="button"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
accept</button>
<button data-modal-hide="defaultModal" type="button"
class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
</div>
</div>
</div>
</div>
</div>




<div class="justify-self-center ml-2 mt-3 self-center mx-auto  w-[5%] xl:mx-0 order-3 xl:self-center xl:order-3 xl:w-[10%]">
    <button id="btn-card1-1" onclick="gantiKonten(1, 1, this)"  class="w-[8px] xl:w-[10px]  block xl:mx-0 mb-2 h-[10px] bg-red-500 rounded-full xl:block"></button>
    <button id="btn-card1-2" type="button" onclick="gantiKonten(1, 2, this)" class="w-[8px] xl:w-[10px] hover block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
    <button id="btn-card1-3" class="w-[8px] xl:w-[10px]  block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
</div>
</div>
{{-- <div class="xl:w-28 xl:h-28 mx-auto bg-red-500 rounded-full">
    <img src="{{asset('/assets/img/team-1.jpg')}}" class="rounded-full " alt="">
</div> --}}


</div>
<div class="block mx-2 py-4 xl:mx-auto h-[150px] xl:w-[500px] xl:h-[250px] xl:py-6 bg-white border border-gray-200 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="flex p-1 items-center  xl:w-[120%] xl:flex-row relative xl:top-0 xl:-left-20 xl:h-full xl:items-center ">
        
        <div class="w-[20%] h-[20%] mx-auto order-1 xl:order-1 xl:w-[40%] xl:h-[100%] max-h-full rounded-2xl ">
            <img src="{{asset('/assets/tim/2.png')}}" class=" w-full h-full rounded-2xl" alt="">
        </div>
        
        <div id="konten-card2-1" class="px-2 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="font-bold text-sm -mt-2 font-poppins xl:text-lg xl:-mt-6 text-center">Tim Titik Koma</h1>
            <p class="text-xs text-justify xl:text-base font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod corporis optio eius fugit quidem omnis dolores doloremque voluptas quibusdam.</p>
        </div>
        
        <div id="konten-card2-2" class="hidden  px-1 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="text-sm -mt-2 xl:text-lg font-bold font-poppins xl:-mt-6 text-center">Lowongan & Kualifikasi</h1>
            <div class="px-2 overflow-y-auto grid grid-cols-2 gap-1 max-h-[64px] xl:max-h-[170px] xl:overflow-y-auto">
                <div>
                    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Frontend Developer
                    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div>
            <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Frontend Developer
            <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
    </button>
</div>
<div>
    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>

</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>


</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>

</div>

{{-- modal button --}}
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
<div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Frontend Developer
        </h3>
        <button type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="defaultModal">
        <svg aria-hidden="true" class="w-5 h-5 mt-1"xl: fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Close modal</span>
</button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        With less than a month to go before the European Union enacts new consumer
        privacy laws for its citizens, companies around the world are updating their
        terms of service agreements to comply.
    </p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
        effect on May 25 and is meant to ensure a common set of data rights in the
        European Union. It requires organizations to notify users as soon as possible of
        high-risk data breaches that could personally affect them.
    </p>
</div>
<!-- Modal footer -->
<div
class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
<button data-modal-hide="defaultModal" type="button"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
accept</button>
<button data-modal-hide="defaultModal" type="button"
class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
</div>
</div>
</div>
</div>
</div>




<div class="self-start mx-auto -mt-3 w-[15%] xl:mx-0 order-3 xl:self-center xl:order-3 xl:w-[10%]">
    <button id="btn-card1-1" onclick="gantiKonten(2, 1, this)"  class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-red-500 rounded-full xl:block"></button>
    <button id="btn-card1-2" type="button" onclick="gantiKonten(2, 2, this)" class="w-[8px] xl:w-[10px] hover inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
    <button id="btn-card1-3" class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
</div>
</div>
{{-- <div class="xl:w-28 xl:h-28 mx-auto bg-red-500 rounded-full">
    <img src="{{asset('/assets/img/team-1.jpg')}}" class="rounded-full " alt="">
</div> --}}


</div>
<div class="block mx-2 py-4 xl:mx-auto h-[150px] xl:w-[500px] xl:h-[250px] xl:py-6 bg-white border border-gray-200 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="flex p-1 items-center  xl:w-[120%] xl:flex-row relative xl:top-0 xl:-left-20 xl:h-full xl:items-center ">
        
        <div class="w-[20%] h-[20%] mx-auto order-1 xl:order-1 xl:w-[40%] xl:h-[100%] max-h-full rounded-2xl ">
            <img src="{{asset('/assets/tim/3.png')}}" class=" w-full h-full rounded-2xl" alt="">
        </div>
        
        <div id="konten-card1-1" class="px-2 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="font-bold text-sm -mt-2 font-poppins xl:text-lg xl:-mt-6 text-center">Tim Titik Koma</h1>
            <p class="text-xs text-justify xl:text-base font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod corporis optio eius fugit quidem omnis dolores doloremque voluptas quibusdam.</p>
        </div>
        
        <div id="konten-card1-2" class="hidden  px-1 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="text-sm -mt-2 xl:text-lg font-bold font-poppins xl:-mt-6 text-center">Lowongan & Kualifikasi</h1>
            <div class="px-2 overflow-y-auto grid grid-cols-2 gap-1 max-h-[64px] xl:max-h-[170px] xl:overflow-y-auto">
                <div>
                    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Frontend Developer
                    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div>
            <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Frontend Developer
            <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
    </button>
</div>
<div>
    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>

</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>


</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>

</div>

{{-- modal button --}}
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
<div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Frontend Developer
        </h3>
        <button type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="defaultModal">
        <svg aria-hidden="true" class="w-5 h-5 mt-1"xl: fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Close modal</span>
</button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        With less than a month to go before the European Union enacts new consumer
        privacy laws for its citizens, companies around the world are updating their
        terms of service agreements to comply.
    </p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
        effect on May 25 and is meant to ensure a common set of data rights in the
        European Union. It requires organizations to notify users as soon as possible of
        high-risk data breaches that could personally affect them.
    </p>
</div>
<!-- Modal footer -->
<div
class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
<button data-modal-hide="defaultModal" type="button"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
accept</button>
<button data-modal-hide="defaultModal" type="button"
class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
</div>
</div>
</div>
</div>
</div>




<div class="self-start mx-auto -mt-3 w-[15%] xl:mx-0 order-3 xl:self-center xl:order-3 xl:w-[10%]">
    <button id="btn-card1-1" onclick="gantiKonten(1, 1, this)"  class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-red-500 rounded-full xl:block"></button>
    <button id="btn-card1-2" type="button" onclick="gantiKonten(1, 2, this)" class="w-[8px] xl:w-[10px] hover inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
    <button id="btn-card1-3" class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
</div>
</div>
{{-- <div class="xl:w-28 xl:h-28 mx-auto bg-red-500 rounded-full">
    <img src="{{asset('/assets/img/team-1.jpg')}}" class="rounded-full " alt="">
</div> --}}


</div>
<div class="block mx-2 py-4 xl:mx-auto h-[150px] xl:w-[500px] xl:h-[250px] xl:py-6 bg-white border border-gray-200 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="flex p-1 items-center  xl:w-[120%] xl:flex-row relative xl:top-0 xl:-left-20 xl:h-full xl:items-center ">
        
        <div class="w-[20%] h-[20%] mx-auto order-1 xl:order-1 xl:w-[40%] xl:h-[100%] max-h-full rounded-2xl ">
            <img src="{{asset('/assets/tim/4.png')}}" class=" w-full h-full rounded-2xl" alt="">
        </div>
        
        <div id="konten-card1-1" class="px-2 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="font-bold text-sm -mt-2 font-poppins xl:text-lg xl:-mt-6 text-center">Tim Titik Koma</h1>
            <p class="text-xs text-justify xl:text-base font-medium">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod corporis optio eius fugit quidem omnis dolores doloremque voluptas quibusdam.</p>
        </div>
        
        <div id="konten-card1-2" class="hidden  px-1 xl:px-2 order-3 w-[100%] h-[40%] xl:p-4 xl:order-2 xl:h-[100%] max-h-full xl:w-[60%]">
            <h1 class="text-sm -mt-2 xl:text-lg font-bold font-poppins xl:-mt-6 text-center">Lowongan & Kualifikasi</h1>
            <div class="px-2 overflow-y-auto grid grid-cols-2 gap-1 max-h-[64px] xl:max-h-[170px] xl:overflow-y-auto">
                <div>
                    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Frontend Developer
                    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div>
            <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Frontend Developer
            <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
    </button>
</div>
<div>
    <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>

</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>


</div>
<div>
    <button type="button"
    class="mt-1 text-gray-900 bg-white border border-gray-300 focus:outline-none p-1 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-center inline-flex text-xs font-medium rounded-lg  xl:text-sm  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    Frontend Developer
    <svg aria-hidden="true" class="w-5 h-5 mt-1 xl:mt-3 right-0" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>
</button>
</div>

</div>

{{-- modal button --}}
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
<div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Frontend Developer
        </h3>
        <button type="button"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="defaultModal">
        <svg aria-hidden="true" class="w-5 h-5 mt-1"xl: fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Close modal</span>
</button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        With less than a month to go before the European Union enacts new consumer
        privacy laws for its citizens, companies around the world are updating their
        terms of service agreements to comply.
    </p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
        effect on May 25 and is meant to ensure a common set of data rights in the
        European Union. It requires organizations to notify users as soon as possible of
        high-risk data breaches that could personally affect them.
    </p>
</div>
<!-- Modal footer -->
<div
class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
<button data-modal-hide="defaultModal" type="button"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
accept</button>
<button data-modal-hide="defaultModal" type="button"
class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
</div>
</div>
</div>
</div>
</div>




<div class="self-start mx-auto -mt-3 w-[15%] xl:mx-0 order-3 xl:self-center xl:order-3 xl:w-[10%]">
    <button id="btn-card1-1" onclick="gantiKonten(1, 1, this)"  class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-red-500 rounded-full xl:block"></button>
    <button id="btn-card1-2" type="button" onclick="gantiKonten(1, 2, this)" class="w-[8px] xl:w-[10px] hover inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
    <button id="btn-card1-3" class="w-[8px] xl:w-[10px]  inline-block xl:mx-0 mb-2 h-[10px] bg-black rounded-full xl:block"></button>
</div>
</div>
{{-- <div class="xl:w-28 xl:h-28 mx-auto bg-red-500 rounded-full">
    <img src="{{asset('/assets/img/team-1.jpg')}}" class="rounded-full " alt="">
</div> --}}


</div>


{{-- Pagination --}}
<div class="flex w-full  justify-cente max-h-[20vh] bottom-20 flex-col items-center md:hidden xl:hidden">
    <!-- Help text -->
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <!-- Buttons -->
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            Prev
        </button>
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Next
            <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div>

</section>

<div class="md:hidden bg-white fixed w-full bottom-0 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex justify-around -mb-px mx-1 text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-1">
            <svg aria-hidden="true" class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
        </path>
    </svg>
    <a href="/"
    class="inline-flex text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
    Beranda
</a>
</li>
<li class="mr-1">
    <svg aria-hidden="true" class="w-5 h-5 mx-auto text-blue-600 dark:text-blue-500" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
</path>
</svg>
<a href="#"
class="inline-flex text-xs p-2 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group"
aria-current="page">
List Tim
</a>
</li>
<li class="mr-1">
    <svg aria-hidden="true"
    class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
    <path fill-rule="evenodd"
    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
    clip-rule="evenodd"></path>
</svg>
<a href="#"
class="inline-flex text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
Tim Saya
</a>
</li>
<li class="mr-1">
    <svg aria-hidden="true"
    class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
    <path fill-rule="evenodd"
    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
    clip-rule="evenodd"></path>
</svg>
<a href="#"
class="inline-flex text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
Buat Tim
</a>
</li>
<li class="mr-1">
    <svg aria-hidden="true"
    class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
</path>
</svg>
<a href="#"
class="inline-flex text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
Profil
</a>
</li>
<li class="mr-1">
    <svg aria-hidden="true"
    class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
</path>
</svg>
<a href="#"
class="inline-flex text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
List Job
</a>
</li>

</ul>
</div>

<div class="hidden xl:mt-8 md:flex w-full justify-center  max-h-[20vh] bottom-20 flex-col items-center">
    <!-- Help text -->
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <!-- Buttons -->
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            Prev
        </button>
        <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Next
            <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div>


<div id="modalTim" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full top-10 max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Buat Tim
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalTim">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="max-h-[70vh] overflow-y-auto">
          
                    <div x-data="app()" x-cloak>
                        <div class="max-w-3xl mx-auto px-4 py-4">
                            
                            <div x-show.transition="step === 'complete'">
                                <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                                    <div>
                                        <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        
                                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration Success</h2>
                                        
                                        <div class="text-gray-600 mb-8">
                                            Thank you. We have sent you an email to demo@demo.test. Please click the link in the message to activate your account.
                                        </div>
                                        
                                        <button
                                        @click="step = 1"
                                        class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                                        >Back to home</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div x-show.transition="step != 'complete'">	
                                <!-- Top Navigation -->
                                <div class="">
                                    
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                        <div class="flex-1 text-center ">
                                            
                                            <ol class="flex items-center justify-evenly w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white  rounded-lg  dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                                                <li x-bind:class="step == 1 ? 'text-blue-600 dark:text-blue-500' : ''" class="flex items-center  ">
                                                    <span x-bind:class="step == 1 ? ' border-blue-600 dark:border-blue-500' : ''" class="flex items-center justify-center w-5 h-5 mr-2 text-xs border  rounded-full shrink-0 ">
                                                        1
                                                    </span>
                                                    Profil <span class="hidden sm:inline-flex sm:ml-2"></span>
                                                    
                                                </li>
                                                <li x-bind:class="step == 2 ? 'text-blue-600 dark:text-blue-500' : ''" class="flex items-center">
                                                    <span x-bind:class="step == 2 ? ' border-blue-600 dark:border-blue-500' : ''" class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                        2
                                                    </span>
                                                    Rekrutmen <span class="hidden sm:inline-flex sm:ml-2"></span>
                                                    
                                                </li>
                                                
                                            </ol>
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <!-- /Top Navigation -->
                                
                                <!-- Step Content -->
                                <div class="py-4">	
                                    <div x-show.transition.in="step === 1">
                                        <div class="mb-5 text-center">
                                            <div class="mx-auto w-[200px] h-[200px]  mb-4 shadow-inset">
                                                <input class="my-pond" type="file" 
                                                class="filepond"
                                                name="filepond"
                                                accept="image/*"/>
                                            </div>
                                            
                                            
                                          
                                            
                                            <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-5">Klik untuk mengunggah logo</div>
                                            
                                            
                                        </div>
                                        
                                        
                                        <div class="mb-5">
                                            <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                                            <input type="text" id="nama_tim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tim Kage.." required>
                                        </div>
                                        <div class="mb-5">
                                            
                                            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Tim</label>
                                            <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>Pilih Kategori</option>
                                                <option value="Web">Web development</option>
                                                <option value="Mobile">Mobile Development</option>
                                                <option value="Game">Game Development</option>
                                                <option value="Ilustrator">Ilustrator</option>
                                            </select>
                                            
                                        </div>
                                        
                                        <div class="mb-5">
                                            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Tim</label>
                                            <input id="deskripsi" type="hidden" name="content">
                                            <trix-editor input="deskripsi"></trix-editor>  
                                        </div>
                                        
                                    </div>
                                    <div x-show.transition.in="step === 2">
                                        <template x-for="(input, index) in lowongan" :key="index">
                                            <div class="mb-5 shadow-md p-5">
                                                <div class="flex p-2 justify-center bg-gray-100 mb-3">
                                                    <h1>Lowongan <span x-text="++index"></span></h1>
                                                    <button class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg" @click="hapusLowongan(index)" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                                    </button>
                                                </div>
                                                <form x-data="color()">
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                        <div class="">
                                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Role</label>
                                                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Frontend, Backend.." required>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <div class="w-full">
                                                                <label for="colorSelected" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Warna Role</label>
                                                                <input id="colorSelected" type="text" placeholder="Pick a color"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                readonly 
                                                                x-model="colorSelected">
                                                            </div>
                                                            <div class="relative ml-3 mt-6">
                                                                <button type="button" @click="isOpen = !isOpen" 
                                                                class="w-10 h-10 rounded-full focus:outline-none focus:shadow-outline inline-flex p-2 shadow"
                                                                :style="`background: ${colorSelected}; color: white`"
                                                                >
                                                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M15.584 10.001L13.998 8.417 5.903 16.512 5.374 18.626 7.488 18.097z"/><path d="M4.03,15.758l-1,4c-0.086,0.341,0.015,0.701,0.263,0.949C3.482,20.896,3.738,21,4,21c0.081,0,0.162-0.01,0.242-0.03l4-1 c0.176-0.044,0.337-0.135,0.465-0.263l8.292-8.292l1.294,1.292l1.414-1.414l-1.294-1.292L21,7.414 c0.378-0.378,0.586-0.88,0.586-1.414S21.378,4.964,21,4.586L19.414,3c-0.756-0.756-2.072-0.756-2.828,0l-2.589,2.589l-1.298-1.296 l-1.414,1.414l1.298,1.296l-8.29,8.29C4.165,15.421,4.074,15.582,4.03,15.758z M5.903,16.512l8.095-8.095l1.586,1.584 l-8.096,8.096l-2.114,0.529L5.903,16.512z"/></svg>
                                                            </button>
                                                            
                                                            <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100 transform"
                                                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                                            x-transition:leave="transition ease-in duration-75 transform"
                                                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                                            class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg">
                                                            <div class="rounded-md bg-white shadow-xs px-4 py-3">
                                                                <div class="flex flex-wrap -mx-2">
                                                                    <template x-for="(color, index) in colors" :key="index">
                                                                        <div 
                                                                        class="px-2"
                                                                        >
                                                                        <template x-if="colorSelected === color">	
                                                                            <div
                                                                            class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white"
                                                                            :style="`background: ${color}; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);`"
                                                                            ></div>
                                                                        </template>
                                                                        
                                                                        <template x-if="colorSelected != color">
                                                                            <div
                                                                            @click="colorSelected = color"
                                                                            @keydown.enter="colorSelected = color"
                                                                            role="checkbox"
                                                                            tabindex="0"
                                                                            :aria-checked="colorSelected"	
                                                                            class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                                            :style="`background: ${color};`"
                                                                            ></div>
                                                                        </template>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                            </div>  
                                        </div>
                                        <div class="w-full">
                                            <label for="lowongan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lowongan & kualifikasi Tim</label>
                                            <input id="lowongan" type="hidden" name="content">
                                            <trix-editor input="lowongan">
                                                
                                            </trix-editor> 
                                        </div>
                                    </form>  
                                </div>
                            </template>
                            
                            
                            
                            
                            
                            
                            
                            <button class="w-full text-white p-2 rounded-lg shadow-md bg-green-500" @click="tambahLowongan()">
                                Tambah Lowongan dan Kualifikasi
                            </button>
                            
                        </div>
                        
                    </div>
                    <!-- / Step Content -->
                </div>
          
            
            <!-- Bottom Navigation -->	
            <div class=" bottom-0 left-0 right-0 py-5 bg-white" x-show="step != 'complete'">
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <button
                            x-show="step > 1"
                            @click="step--"
                            class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                            >Sebelumnya</button>
                        </div>
                        
                        <div class="w-1/2 text-right">
                            <button
                            x-show="step < 2"
                            @click="step++"
                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
                            >Selanjutnya</button>
                            
                            <button
                            @click="step = 'complete'"
                            x-show="step == 2"
                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
                            >Selesai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div>
        </div>
        <!-- Modal footer -->
        
    </div>
</div>
</div>

</div>
</div>




<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('anim-container'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: "{{asset('lottie/robot.json')}}"
    });
</script>

<script >
    
    function gantiKonten(card, page, current)
    {
        
        if(page == 1){
            document.getElementById(`konten-card${card}-${page}`).classList.add('animate__animated', 'animate__fadeIn');
            document.getElementById(`konten-card${card}-2`).classList.contains('hidden') ? '' : document.getElementById(`konten-card${card}-2`).classList.toggle('hidden');
            document.getElementById(`konten-card${card}-${page}`).classList.contains('hidden') ? document.getElementById(`konten-card${card}-${page}`).classList.toggle('hidden') : '';
            document.getElementById(`btn-card`+card+'-2').style.backgroundColor = 'black';
            document.getElementById(`btn-card`+card+'-3').style.backgroundColor = 'black';
        }else if(page == 2){
            document.getElementById(`konten-card${card}-${page}`).classList.add('animate__animated', 'animate__fadeIn');
            document.getElementById(`konten-card${card}-1`).classList.contains('hidden') ? '' : document.getElementById(`konten-card${card}-1`).classList.toggle('hidden');
            // document.getElementById(`konten-card${card}-3`).classList.toggle('hidden');
            document.getElementById(`konten-card${card}-${page}`).classList.contains('hidden') ? '' : document.getElementById(`konten-card${card}-${page}`).classList.toggle('hidden');
            
            document.getElementById(`konten-card${card}-${page}`).classList.toggle('hidden');
            document.getElementById(`btn-card`+card+'-1').style.backgroundColor = 'black';
            document.getElementById(`btn-card`+card+'-3').style.backgroundColor = 'black';
        }else{
            // document.getElementById(`konten-card${card}-2`).style.display = 'none';
            // document.getElementById(`konten-card${card}-3`).style.display = 'none';
            // document.getElementById(`konten-card${card}-${page}`).style.display = 'block';
            document.getElementById(`btn-card`+card+'-1').style.backgroundColor = 'black';
            document.getElementById(`btn-card`+card+'-3').style.backgroundColor = 'black';
        }
        // document.getElementById(`konten-card`+card).innerHTML = e;
        current.style.backgroundColor = 'red'
    }
    
    
    
</script>

<script>
    
    
    function color() {
        return {
            isOpen: false,
            colors: ['#2196F3', '#009688', '#9C27B0', '#FFEB3B', '#afbbc9', '#4CAF50', '#2d3748', '#f56565', '#ed64a6'],
            colorSelected: '#2196F3'
        }
    }
    
    function app() {
        return {
            step: 1, 
            passwordStrengthText: '',
            togglePassword: false,
            
            lowongan: [],
            tambahLowongan() {
                
                this.lowongan.push({
                    txt1: '',
                    txt2: ''
                });
            },
            hapusLowongan(index) {
                
                this.lowongan.splice(--index, 1);
            },
            
            image: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAAAAAAAD/4QBCRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAkAAAAMAAAABAAAAAEABAAEAAAABAAAAAAAAAAAAAP/bAEMACwkJBwkJBwkJCQkLCQkJCQkJCwkLCwwLCwsMDRAMEQ4NDgwSGRIlGh0lHRkfHCkpFiU3NTYaKjI+LSkwGTshE//bAEMBBwgICwkLFQsLFSwdGR0sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAdoB2gMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTmZsnmk3N60N1NJTELub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lJQA7c3rSbm9aSigBdzetG4+tJRQAZPrRuPrSUUALub1/lRub1pKSgBdzUbm9aSigBdzetG5vX+VJSUALub1/lUu5qhqXj1oAG6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooASiiigAooooAKSiigAooo+lACUZoooAKKKSgAo/rRSUALUlRVJz60AObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiikoAKSlooASiiigA+lHpRQaACkoooATmilpPegBP/ANdS5HrUdSfL7UAObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKSiigAooooAKKKKAEooooASij60UAFFFHpQAUmaKPxoAKSlpPWgA/wAmk/pS/Sk47dqADpUvPvUXrUn4H8qAHt1NJSt1NJQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFISFBJIAHUk4FAC0VTlv4EyEBc+3C/nVSS9uX6MEHonX8zQBrEqvLEAe5A/nUTXVqvWVfwyf5VjFmY5Ykn3JP86SmBrG/tB3c/RTTf7QtvST8hWXRQBqi/te+8f8AAc09by0b/loB/vAiseigDeV43+66t9CDTq5/p04+lTJdXMfSQkej/MP1oA2qKoR6gpwJUK/7Scj8utXEkjkG5GDD2P8AMUgH0UUUAFFFJQAUUUUAFFFJQAtJRRQAUlFFABR2oo+lAB1pKKP60AFFFFACUHjNH/66KAEpaSj/APVQAc0/I9KZUufpQA5uppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACimsyopZiAo5JNZlxePLlI8rH0J/ib60AWp72KLKph3/wDHR9TWdLNNMcuxPoOij6Co6KYBRRRQAUUUUAFFFFABRRRQAUUUUAFKruhDIxUjuDikooA0IL/os4/4Gv8AUVfBVgCpBB6Ecg1gVLBcSwH5eUP3lPQ/SgDaoqOKaOZdyH/eB6qfepKQBRRRQAlFFFABSUUUAFFFFABRRSf5NABxR6e1FJQAcUUUnP6UALSf5/GjvRz+FAB06d6KT6UGgA96kyf8mo//ANdP59P1oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmu6RqzucKvJNKSACScADJJ7Csi6uDO2BkRqflHr7mgBLi5edu4QH5V/qagoopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACUUUUAPjkkiYOhwR+RHoa14J0nTI4YffX0NYtPileJ1dDyOoPQj0NAG7SUyKVJkDr36juD6U+kAUhoooAKKKKACij/JpKACj/PNFFABScUelFACUdqP8mj+dABn9KMjij60d+tACf5FH5Uf59qOOlACfhUn40zmn4oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKhuJhDEz/xfdQerGgCpfXGT5CHgf6w+/8AdqhQSSSScknJPqTRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiiigCe2nMEnP+rbhx6e9bHoQevT3zXP1p2M+9DE33k5X/AHf/AK1AF2koNFIAoopKAFpKKPSgApPX0pf8mkoAKKTPP1paAE+lFFIT/ntQAelHAoz0oz/hQAd6T155oooAKk2+wqLPt/8AWqTj1P5GgCZuppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArJvpd8uwH5Y+P+BHrWnK4jjkc/wAKkj69qwiSSSepJJ+ppgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSUUUAFFFFABRRSUAFFFFABT4pDFIkg/hPPuO4plFAG8CGAYchgCD7HmlqpYy74dp6xnH4HkVapALSUUUAH+NFFJQAc0f5+tHFJQAUUUepoAP/r0nP/1sUH1ozQAUnOaPwo9OlAAcd6T60tJQAHn+lSZPotR/55qTJ/yKAJm6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKWoPiNE/vtk/RazKt6g2Zgv9xB+Z5qpTAKKKKACiiigAooooAKKKKA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',
            password: '',
            gender: 'Male',
            
            checkPasswordStrength() {
                var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
                
                let value = this.password;
                
                if (strongRegex.test(value)) {
                    this.passwordStrengthText = "Strong password";
                } else if(mediumRegex.test(value)) {
                    this.passwordStrengthText = "Could be stronger";
                } else {
                    this.passwordStrengthText = "Too weak";
                }
            }
        }
    }
    
</script>

<script>
    
    // var element = document.querySelector("#deskripsi")
    // element.editor;
    
    FilePond.registerPlugin(
    
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    );
    
   
    // Select the file input and use 
    // create() to turn it into a pond
    FilePond.create(
    document.querySelector('.my-pond'),
    {
        labelIdle: `Logo Tim`,
        imagePreviewHeight: 170,
        acceptedFileTypes: ['image/*'],
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleButtonRemoveItemPosition: 'center bottom'
    }
    );
    
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>