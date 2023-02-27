<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    
<!-- Modal toggle -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
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
  </div>
  
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
    <div class="w-[50%]  h-full  absolute -left-10">
        <img class="" src="{{asset('assets/tim/women.png')}}" alt="">
    </div>
    {{-- <h1 class="px-3 text-transparent bg-clip-text bg-gradient-to-r from-purple-800 via-red-500 to-yellow-500 mx-auto text-center mt-24  pt-26 sm:pt-28 xl:pt-36 sm:w-[64%] sm:mt-4 sm: text-4xl md:text-5xl lg:text-6xl xl:text-[84px] sm:text-[40px] font-bold font-poppins">Be a Leader or Member</h1> --}}
    <h1 class="xl:text-[40px] absolute xl:left-80 xl:top-20 text-center text-white  xl:w-[50%] font-bold font-poppins">Ayo Buat atau Join Tim Impianmu di TeamUp</h1>
    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-white text-center bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-yellow-200 via-red-500 to-fuchsia-500 hover:from-yellow-300 hover:via-red-600 hover:to-fuchsia-600  border-gray-300 xl:absolute xl:left-[48%] xl:top-[60%] rounded-2xl  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-cyan-200 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Buat Tim </button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>