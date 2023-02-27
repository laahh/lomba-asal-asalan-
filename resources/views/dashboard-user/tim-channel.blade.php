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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    
    
    
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


<div class="xl:mx-10 xl:max-h-screen md:flex justify-between font-poppins ">
    
    <div class="bg-[conic-gradient(at_left,_var(--tw-gradient-stops))]  from-sky-400 to-blue-800 p-4 rounded-2xl w-full h-[80vh] max-h-[80vh] overflow-y-auto sm:w-[600px] md:w-[80%] mt-5 shadow-2xl">
        
        <div class="mb-4 border-b border-gray-200  text-lg">
            <ul class=" hidden sm:flex sm:flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class=" basis-1/5" role="presentation">
                    <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 border-transparent   text-sm " id="profil-tab" data-tabs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Profil Tim</button>
                </li>
                <li class=" basis-1/5" role="presentation">
                    <button class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm  dark:text-gray-400 border-gray-100 dark:border-gray-700" id="lowongan-tab" data-tabs-target="#lowongan" type="button" role="tab" aria-controls="lowongan" aria-selected="false">Lowongan</button>
                </li>
                
                <li class=" basis-1/5 " role="presentation">
                    <button class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm  dark:text-gray-400 border-gray-100 dark:border-gray-700" id="member-tab" data-tabs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false">Member</button>
                </li>
                
                
                <li class=" basis-1/5" role="presentation" >
                    <button class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm  dark:text-gray-400 border-gray-100 dark:border-gray-700" id="projek-tab" data-tabs-target="#projek" type="button" role="tab" aria-controls="projek" aria-selected="false">Project</button>
                </li>
                
                <li class=" basis-1/5" role="presentation" >
                    <button class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm  dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Task</button>
                </li>
                
                
                
                
                {{-- <li role="presentation" class="ml-auto">
                    <button data-modal-toggle="modalApply" type="submit" class="inline-block p-4 w-full float-right bg-[#26ff12] rounded-full text-white shadow">Apply</button>
                </li>
                --}}
                
                
                {{-- <li role="presentation" class="ml-auto ">
                    <div class="inline-block py-4 mt-1 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab">
                        <label class="inline-flex relative items-center mr-5  cursor-pointer">
                            <input type="checkbox" value="open" onclick="updateStatusTim()" class="sr-only peer" 
                            >
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                            <span id="status-tim" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">open</span>
                        </label>
                    </div>
                    
                </li> --}}
                
                {{-- <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-sm text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false"> --}}
                    
                    {{-- </button> --}}
                </ul>
            </div>
            <div id="myTabContent">
                <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                    
                    <div class="xl:flex xl:w-full xl:h-[200px] xl:px-2">
                        
                        <div class=" xl:w-[30%] ">
                            <img src="{{asset('/assets/tim/1.png')}}" class="mx-auto  max-h-[80px]  sm:max-h-full sm:max-w-full md:mx-0 xl:max-w-full xl:max-h-full rounded-2xl" alt="">
                        </div>
                        
                        <div class=" xl:w-[70%] ">
                            <div class="flex justify-center gap-x-2 xl:mb-1">
                                <h1 class="text-[#313131] text-xl font-semibold" id="team_name">red velvet</h1>
                                
                                <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  " type="button" data-modal-toggle="modalTitle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                                    
                                </button>
                                
                                
                                
                                <div id="modalTitle"  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow ">
                                            
                                            
                                            <div class="">
                                                <div class="flex justify-end px-1 pt-4">
                                                    
                                                    <!-- Dropdown menu -->
                                                    <button id="btn-modal-name" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="modalTitle">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        <span class="sr-only">Close modal</span> 
                                                    </button>
                                                </div>
                                                <div class="flex flex-col items-center pb-10">
                                                    
                                                    
                                                    <div class="w-full px-5">
                                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Name</label>
                                                        <input type="text" id="name" name="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required value="red velvet">
                                                    </div>
                                                    
                                                    <button type="butotn" onclick="updateName()" class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                    
                                                    
                                                </div>
                                            </div>              
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="text-[#7D7777] text-center text-sm font-normal xl:mb-2">Dibuat oleh  : Deva Apriana</p>
                            
                            <div class="flex items-center justify-center mb-8">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                        fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Second star</title>
                        <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                        fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Third star</title>
                        <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                        </svg>
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                        fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Fourth star</title>
                        <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                    fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>Fifth star</title>
                    <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                    </svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                        4.95</p>
                    </div>



<div class="flex mx-auto w-full shadow-md rounded text-center">
    
    <div class="basis-1/4">
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgb(250 204 21 / 1);transform: ;msFilter:;"><path d="M21 5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5zM5 19V5h14l.002 14H5z"></path><path d="M7 7h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6z"></path></svg>
        <p class="text-yellow-400 text-xs font-poppins font-semibold">Requirement</p>
        <p class=" text-yellow-400 text-lg font-poppins font-semibold">5</p>
    </div>
    <div class="basis-1/4">
        
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: 
        rgb(96 165 250 / 1);transform: ;msFilter:;"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
        
        <p class="text-blue-400 text-xs font-poppins font-semibold">Projek</p>
        <p class=" text-blue-400 text-lg font-poppins font-semibold">50</p>
    </div>
    <div class="basis-1/4">
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgb(74 222 128 / 1);transform: ;msFilter:;"><path d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z"></path><path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path></svg>
        <p class="text-green-400 text-xs font-poppins font-semibold">Task</p>
        <p class=" text-green-400 text-lg font-poppins font-semibold">2000</p>
    </div>
    <div class="basis-1/4">
        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgb(251 146 60 / 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
        <p class="text-orange-400 text-xs font-poppins font-semibold">Member</p>
        <p class=" text-orange-400 text-lg font-poppins font-semibold">10</p>
    </div>
    
</div>


</div>
</div>

<div class="mt-4 flex xl:mt-2  xl:px-2">
    <h1 class="text-[#313131] text-lg font-semibold ">Deskripsi :</h1>
    
    <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg" type="button" data-modal-toggle="modalDescription">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
        
    </button>
    
    
    <div id="modalDescription"  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <div class="">
                    <div class="flex justify-end px-1 pt-4">
                        
                        <!-- Dropdown menu -->
                        <button type="button" id='btn-modal-desc' class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="modalDescription">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span> 
                        </button>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        
                        
                        
                        
                        <div class="w-full px-4">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your team here...">desc</textarea>
                            
                        </div>
                        <button type="submit" class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="updateDesc()">Update</button>
                        
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>
<p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] dark:text-gray-400" id="description_team">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui aliquam consequatur repudiandae, facilis dignissimos illo quod? Soluta nobis ipsa illum exercitationem numquam ipsum. Aut voluptatum necessitatibus pariatur debitis porro aliquid vel, obcaecati est placeat adipisci iure vero deserunt soluta ratione facere similique quod. Hic ea sint aperiam natus dolore sed?</p>

</div>
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="lowongan" role="tabpanel" aria-labelledby="lowongan-tab">
    <div class="flex gap-x-2">
        <h1 class="text-[#313131] text-lg font-semibold">Lowongan :</h1>
        
        <button class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalAddRequirement">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
        </button>
        
    </div>
    
    {{-- Modal Add Requirement --}}
    <div id="modalAddRequirement" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" id="btn-modal-requirement" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalAddRequirement">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Requirement</h3>
                    
                    
                    <div class="" id="requirement">
                        <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                            <div class="basis-[30%] relative">
                                <input type="text" name="requirement[0][role]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                            </div>
                            
                            <div class="basis-[30%] relative">
                                <input type="text" name="requirement[0][salary]" id="requirement-salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>
                            </div>
                            
                            <div class="basis-[40%] relative" id="qualification-area">
                                
                                <div class="relative">
                                    
                                    <input name="requirement[0][qualification][]" id="qualification" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="qualification" required>
                                    <button type="button" onclick="tambahChild(this,0)" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                    {{-- <button type="button" onclick="tambah()">
                                        <i class='bx bxs-plus-circle'></i>
                                    </button> --}}
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <button type="buttton" onclick="addRequirement()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                    
                </div>
            </div>
        </div>
    </div>
    
    {{-- Modal Edit Requirement --}}
    <div id="modalEditRequirement" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" id="btn-close-modalEditRequirement" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" onclick="closeModalEditRequirement()">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only" >Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Requirement</h3>
                    
                    
                    <div class="" id="requirement">
                        <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                            <div class="basis-[30] relative">
                                <input type="text" name="requirement[0][role]" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="role..." required>
                            </div>
                            <div class="basis-[30%] relative">
                                <input type="text" name="requirement[0][salary]" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>
                            </div>
                            <div class="basis-[40%] relative" id="parent-qualification">
                                
                                <div class="relative mt-8">
                                    
                                    <button type="button" onclick="tambahChild(this,0, 'edit')" class="text-white  absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <i class='bx bxs-plus-circle'></i></button>
                                    {{-- <button type="button" onclick="tambah()">
                                        <i class='bx bxs-plus-circle'></i>
                                    </button> --}}
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <button type="buttton" id="button-update-requirement" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div id="requirement-section">
        
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-transparent dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
            {{-- <h2 id="accordion-flush-heading-1">
                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div> --}}
            
            
            
            
            
            
            <h2 id="accordion-flush-heading-0">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <span class="text-left text-gray-500 font-medium">Frontend</span>
                        <button class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                        
                        <button class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                        </button>
                    </div>
                    
                    <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-flush-body-0" aria-expanded="false" aria-controls="accordion-flush-body-0">
                        
                        
                        <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        
                    </button>
                </div>
                
            </h2>
            <div id="accordion-flush-body-0" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            
            <h2 id="accordion-flush-heading-1">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <span class="text-left text-gray-500 font-medium">Frontend</span>
                        <button class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                        
                        <button class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                        </button>
                    </div>
                    
                    <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        
                        
                        <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        
                    </button>
                </div>
                
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-3">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <span class="text-left text-gray-500 font-medium">Frontend</span>
                        <button class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        </button>
                        
                        <button class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement(1)" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                        </button>
                    </div>
                    
                    <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        
                        
                        <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        
                    </button>
                </div>
                
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
            
            
        </div>
        
        {{-- <div class="flex" id="qualification-header">
            <h2 class="text-lg pt-3 text-[#313131] font-semibold">devops</h2>
            
            
            <button class="relative inline-flex items-center justify-center pt-3 ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(1)" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
            </button>
            
            <button class="relative inline-flex items-center justify-center pt-3 ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement(1)" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
            </button>
            
            
        </div>
        <p class="text-xs text-[#7D7777]">Salary : 100000</p>
        <ul class="list-disc ml-10">
            
            <li class="text-[#7D7777]">desc</li>
            
        </ul> --}}
        
        {{-- <p class="list-disc px-10">
            
        </p> --}}
        
    </div>
    
</div>
<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="member" role="tabpanel" aria-labelledby="member-tab">
    
    
    <div class=" w-full  ">
        
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Member Team</h5>
        </div>
        <div>
            <div id="accordion-member" data-accordion="collapse" data-active-classes="bg-transparent dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                
                <h2 id="accordion-member-heading-0">
                    <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="relative">
                                <img class="w-12 h-12 rounded-full" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                            </div>
                            {{-- <img class="w-12 h-12 rounded-full" src="" alt="Neil image"> --}}
                            <div class="ml-2 xl:ml-2">
                                <div class="flex">
                                    <span class="text-left text-gray-500 font-medium">Deva</span>
                                    
                                </div>
                                <p class="text-xs text-gray-500">frontend</p>
                            </div>
                            {{--                             
                                <span class="bg-gray-100 text-gray-800 text-xs xl:ml-2 font-medium inline-flex items-center px-2.5 py-0.5 rounded  dark:bg-gray-700 dark:text-gray-400 ">
                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                    Aktif 3 menit yang lalu
                                </span> --}}
                                
                                
                                
                            </div>
                            
                            <div class="flex items-center">
                                <button type="button" class="text-white h-full md:h-1/2 bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none text-xs focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg md:text-sm px-5 p-1 text-center mr-2 mb-2">Resign <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z"></path><path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path></svg></button>
                                
                                <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-member-body-0" aria-expanded="false" aria-controls="accordion-member-body-0">
                                    
                                    
                                    <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    
                                </button>
                            </div>
                        </div>
                        
                    </h2>
                    <div id="accordion-member-body-0" class="hidden" aria-labelledby="accordion-member-heading-0">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-member-heading-2">
                        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                    <span class="-bottom-2  absolute px-1 w-full h-4 text-white text-[8px] bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full text-center">3 menit</span>
                                </div>
                                
                                <div class="ml-2 xl:ml-2">
                                    <div class="flex">
                                        <span class="text-left text-gray-500 font-medium">Deva</span>
                                        
                                    </div>
                                    <p class="text-xs text-gray-500">Backend</p>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                            <div class="flex items-center">
                                
                                
                                <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-member-body-2" aria-expanded="false" aria-controls="accordion-member-body-2">
                                    
                                    
                                    <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    
                                </button>
                            </div>
                        </div>
                        
                    </h2>
                    <div id="accordion-member-body-2" class="hidden" aria-labelledby="accordion-member-heading-2">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    
                    
                    
                    <h2 id="accordion-member-heading-3">
                        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <span class="text-left text-gray-500 font-medium">Frontend</span>
                                <button class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg" onclick="fetchRequirement(1)" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                                </button>
                                
                                <button class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg" onclick="deleteRequirement(1)" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 50, 50);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                </button>
                            </div>
                            
                            <button type="button" class="flex items-center py-5 font-medium text-left text-gray-500  dark:text-gray-400" data-accordion-target="#accordion-member-body-3" aria-expanded="false" aria-controls="accordion-member-body-3">
                                
                                
                                <svg  data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                
                            </button>
                        </div>
                        
                    </h2>
                    <div id="accordion-member-body-3" class="hidden" aria-labelledby="accordion-member-heading-3">
                        <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            {{-- <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    
                    
                    
                    
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                
                                
                                <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover" class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">
                                    <img class="w-8 h-8 rounded-full" src=".." alt="Neil image">
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownHover1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Phone Number : 09816826816</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Address : pwt</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="flex-1 ">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    irene
                                    
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    example@gmail.com
                                </p>
                                
                                <span class=" text-xs sm:hidden text-white font-semibold  px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color: #191724">frontend</span>
                                
                                
                                
                                <button class="inline sm:hidden" onclick="kick(1)">
                                    <span class="text-white bg-red-600 text-xs font-medium px-2.5 py-0.5 rounded" >Kick</span>
                                </button>
                                
                                
                            </div>
                            
                            
                            
                            <div class="hidden sm:inline-block">
                                <p>
                                    <span class=" text-xs text-white font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800" style="background-color: #097214">backend</span>
                                    
                                </p>
                                
                                
                                <button onclick="kick(1)">
                                    <span class="text-white bg-red-600 text-xs font-medium px-2.5 py-0.5 rounded" >Kick</span>
                                </button>
                                
                                
                                
                            </div>
                            
                            
                            
                        </div>
                    </li>
                    
                    
                    
                </ul>
            </div> --}}
        </div>
    </div>
    <div x-data="{ current_page: 0, main_menu : true, screenWidth: window.innerWidth }" class="hidden p-4 bg-gray-50 rounded-lg w-full dark:bg-gray-800" id="projek" role="tabpanel" aria-labelledby="projek-tab">
        
        <div class="flex gap-x-2 mb-5">
            <h1 class="text-[#313131] text-lg font-semibold">Task :</h1>
            
            <button onclick="fetchTask()" class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalTask">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
            </button>
            
        </div>
        
        <div id="modalTask" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button id="close-btn-task" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalTask">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Task</h3>
                        
                        <div class="mb-3">
                            <label for="task_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Task Title</label>
                            <input type="text" name="task_title" id="task_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Task title..." required>
                        </div>
                        <div class="mb-3">
                            <label for="task_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                            <textarea id="task_description" name="task_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your task..."></textarea>
                        </div>
                        
                        <div>
                            <div class="flex gap-x-2">
                                <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Select Members</label>
                                
                                <button onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true'); document.getElementById('members').innerHTML = ''" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalAddMember">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                                </button>
                            </div>
                            
                            <div id="modalAddMember" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                    <!-- Modal content -->
                                    <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                        <button id="btn-close-member" onclick="document.getElementById('close-btn-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalAddMember">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Member</h3>
                                            
                                            <div>
                                                <input  oninput="searchMember()" type="search" id="inputMember" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Member Name..." required>
                                            </div>
                                            
                                            <div id="members" class="py-3 my-3 hidden rounded-lg bg-white">
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id='member-task'>
                            <p class="text-sm p-2.5  text-gray-500 text-center">No Members Added</p>
                        </div>
                        
                        <div class="mb-3">
                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                            <input id="input-files" name="files[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple> --}}
                            <div class="flex gap-x-2">
                                <label for="category" class="block mb-2  text-sm font-medium text-gray-900 dark:text-gray-400">Files</label>
                                
                                <button onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true')" class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg " type="button" data-modal-toggle="modalFile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgb(78, 255, 78);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                                </button>
                            </div>
                            
                            
                            <div id="modalFile" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 m-auto z-50 w-1/4 md:inset-0 h-modal md:h-full ">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                    <!-- Modal content -->
                                    <div class="relative bg-slate-100 top-0 rounded-lg shadow dark:bg-gray-700">
                                        <button id="btn-close-file" onclick="document.getElementById('close-btn-task').removeAttribute('disabled');" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalFile">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            
                                            <input type="hidden" name="task_id">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                                            <input id="input-files" name="files[]" class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                                            <button type="button" onclick="addFile()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                        </div>
                        <div id='file-task' class="mb-3">
                            <p class="text-sm p-2.5  text-gray-500 text-center">No Task Added</p>
                        </div>
                        
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Due date :</label>
                            
                            <div class="flex items-center">
                                <div class="relative">
                                    
                                    <input name="task_start" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    
                                    <input name="task_end" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                </div>
                            </div>
                            
                        </div>
                        
                        <button type="button" onclick="addTask()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal toggle -->
        <button @click="current_page=0; main_menu=true" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Toggle modal
        </button>
        
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-[1000px] md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Projek 1
                            
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="space-y-6">
                        <div  class="flex flex-col xl:flex-row xl:flex xl:w-full">
                            <div x-show="main_menu" class="xl:w-1/2 p-2 xl:max-h-[416px] scrollbar  xl:overflow-y-auto">
                                <ul>
                                    <li @click="current_page = 1; screenWidth < 768 ? main_menu = false : main_menu = true"  class="bg-white rounded-md shadow-md p-2 mb-3 cursor-pointer">
                                        
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="bg-white rounded-md shadow-md p-2 mb-3">
                                        
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="bg-white rounded-md shadow-md p-2 mb-3">
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="bg-white rounded-md shadow-md p-2 mb-3">
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="bg-white rounded-md shadow-md p-2 mb-3">
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="bg-white rounded-md shadow-md p-2 mb-3">
                                        <div class="flex items-center justify-between">
                                            
                                            <div class="flex flex-col">
                                                
                                                <h1 class="mr-2 mb-2">Slicing landing page</h1>
                                                <div class="flex">
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">UI/UX</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Frontend</span>
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Backend</span>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    
                                </ul>
                                
                                
                                
                            </div>
                            <div class="xl:w-1/2 h-full scrollbar overflow-y-auto max-h-[400px] p-2 bg-gray-100 rounded-md">
                                <div x-show="current_page == 1" class="w-full  p-2 h-full bg-white rounded-lg">
                                    
                                    
                                    <h1 class="text-center text-[#313131] text-lg font-semibold pt-2">Slicing landing page</h1>
                                    <div class="flex justify-center">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4c-4.879 0-9 4.121-9 9s4.121 9 9 9 9-4.121 9-9-4.121-9-9-9zm0 16c-3.794 0-7-3.206-7-7s3.206-7 7-7 7 3.206 7 7-3.206 7-7 7z"></path><path d="M13 12V8h-2v6h6v-2zm4.284-8.293 1.412-1.416 3.01 3-1.413 1.417zm-10.586 0-2.99 2.999L2.29 5.294l2.99-3z"></path></svg> --}}
                                        <p>
                                            <span class="break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">mulai : 26 Februari, 09.00</span> - <span class="break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">berakhir : 30 Februari, 11.00</span>
                                        </p>
                                    </div>
                                    
                                    <div>
                                        <div class="flex xl:mt-4  xl:px-2">
                                            <h1 class="text-[#313131] text-lg font-semibold ">Deskripsi :</h1>
                                        </div>
                                        
                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] dark:text-gray-400 text-justify" id="description_team">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui aliquam consequatur repudiandae, facilis dignissimos illo quod? Soluta nobis ipsa illum exercitationem numquam ipsum. Aut voluptatum necessitatibus pariatur debitis porro aliquid vel, obcaecati est placeat adipisci iure vero deserunt soluta ratione facere similique quod. Hic ea sint aperiam natus dolore sed?</p>
                                    </div>
                                    
                                    
                                    <div class="xl:px-2">
                                        <div class="flex xl:mt-4  ">
                                            <h1 class="text-[#313131] text-lg font-semibold ">Member :</h1>
                                        </div>
                                        <div class="flex mb-5 -space-x-4">
                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/assets/img/team-1.jpg')}}" alt="">
                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/assets/img/team-2.jpg')}}" alt="">
                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/assets/img/team-3.jpg')}}" alt="">
                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('/assets/img/team-4.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="xl:px-2">
                                        <div class="flex xl:mt-4  ">
                                            <h1 class="text-[#313131] text-lg font-semibold ">File :</h1>
                                        </div>
                                        <div class="flex mb-5 space-x-2">
                                            <a href="" download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> word.docx</a>
                                            
                                            <a href="" download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> excell.xlsx</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div x-show="current_page == 0" class="text-center">
                                    Klik salah satu tugas
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex justify-center items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        
                        <button x-show="main_menu == false" @click="current_page=0; main_menu=true" class="text-white bg-red-500 rounded-lg p-3">
                            Kembali
                            <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                        </button>
                        {{-- <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button> --}}
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <ol id="task-list" class="relative border-l border-gray-200 dark:border-gray-700">  
            
            
            <li class="mb-10 ml-6">            
                <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </span>
                <div class="flex">
                    
                    <h3 class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">title 
                    </h3>
                    
                    <button onclick="fetchTaskData(1)" class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"  type="button" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        
                    </button>
                    
                    <button class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg " type="button" onclick="deleteTask(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(248, 36, 36);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
                    </button>
                    
                    
                    
                </div>
                <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">Role : backend
                    <span class="text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3 -mr-2" style="background-color: #891982">backend</span>
                    
                </p>
                <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">start 09.00</time>
                <time class="block mb-4 break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">end 11.00</time>
                <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">desc</p>
                <p class="mb-4 break-words text-base font-normal text-gray-500 dark:text-gray-400">Member : </p>
                
                <div class="flex mb-4">
                    
                    <div>
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src=".." alt="User dropdown">
                    </div>
                    
                    <div>
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src=".. " alt="User dropdown">
                    </div>
                    
                    
                    
                </div> 
                <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Files : </p>
                
                
                <a href=".." download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> docx.deck</a>
                
                
                
                
            </li>
            <li class="mb-10 ml-6">            
                <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </span>
                <div class="flex">
                    
                    <h3 class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">title 
                    </h3>
                    
                    <button onclick="fetchTaskData(1)" class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"  type="button" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                        
                    </button>
                    
                    <button class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg " type="button" onclick="deleteTask(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(248, 36, 36);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
                    </button>
                    
                    
                    
                </div>
                <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">Role : backend
                    <span class="text-white text-sm font-medium px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3 -mr-2" style="background-color: #891982">backend</span>
                    
                </p>
                <time class="block mb-2 break-words text-sm font-normal leading-none dark:text-gray-500 text-green-300">start 09.00</time>
                <time class="block mb-4 break-words text-sm font-normal leading-none dark:text-gray-500 text-red-300">end 11.00</time>
                <p class="mb-4  break-words text-base font-normal text-gray-500 dark:text-gray-400">desc</p>
                <p class="mb-4 break-words text-base font-normal text-gray-500 dark:text-gray-400">Member : </p>
                
                <div class="flex mb-4">
                    
                    <div>
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src=".." alt="User dropdown">
                    </div>
                    
                    <div>
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src=".. " alt="User dropdown">
                    </div>
                    
                    
                    
                </div> 
                <p class="mb-2 break-words text-base font-normal text-gray-500 dark:text-gray-400">Files : </p>
                
                
                <a href=".." download class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> docx.deck</a>
                
                
                
                
            </li>
            
            
            
            <p class="text-sm text-center pb-4">No Task Added</p>
            
            
            
        </ol> --}}
        
    </div>
</div>










</div>






<div class="hidden lg:block ml-6 bg-white xl:p-4 rounded-2xl xl:mt-5 xl:shadow-2xl">
    
    
    {{-- Pelamar --}}
    <h1 class="py-5 text-lg">Applicant</h1>
    
    <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
        
        
        
        
        <li class="pb-3 sm:pb-4">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-4.jpg')}}" alt="Neil image">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        Deva
                    </p>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">QA</span>
                </div>
                
                
                
                
                <button onclick="apply(this)" >
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M0.41,13.41L6,19L7.41,17.58L1.83,12M22.24,5.58L11.66,16.17L7.5,12L6.07,13.41L11.66,19L23.66,7M18,7L16.59,5.58L10.24,11.93L11.66,13.34L18,7Z" />
                    </svg>
                </button>
                
                <button onclick="reject(this)" >
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M18.54 9.88L17.12 8.47L15 10.59L12.88 8.47L11.47 9.88L13.59 12L11.47 14.12L12.88 15.54L15 13.41L17.12 15.54L18.54 14.12L16.41 12M2 12C2 9.21 3.64 6.8 6 5.68V3.5C2.5 4.76 0 8.09 0 12S2.5 19.24 6 20.5V18.32C3.64 17.2 2 14.79 2 12M15 3C10.04 3 6 7.04 6 12S10.04 21 15 21 24 16.96 24 12 19.96 3 15 3M15 19C11.14 19 8 15.86 8 12S11.14 5 15 5 22 8.14 22 12 18.86 19 15 19Z" />
                    </svg>
                </button>
                
                
                <div>
                    <button class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  " type="button" data-modal-toggle="1">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                        </svg>
                        
                    </button>
                    
                    <div id=""  tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                
                                
                                <div class="">
                                    <div class="flex justify-end px-1 pt-4">
                                        
                                        <!-- Dropdown menu -->
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="1">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span> 
                                        </button>
                                    </div>
                                    <div class="flex flex-col items-center pb-10">
                                        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src=".." alt="Bonnie image">
                                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">irene</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">backend</span>
                                        <p class="px-20 text-center pt-1">halo</p>
                                        <div class="flex mt-2 space-x-3 md:mt-6">
                                            <a href=".." class="inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 active:bg-slate-100 dark:focus:ring-gray-700"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg> Download CV</a>
                                            
                                        </div>
                                    </div>
                                </div>              
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                
            </div>
        </li>
        
        
        
        
    </ul>
    {{-- End Pelamar --}}
    
    
    
    
    
    <h1 class="py-5 mt-4 text-lg">Chat Group</h1>
    <form action="{{url('/message')}}" method="POST">
        @csrf
        <input type="hidden" id="teamID" name="slug" value="1">
        <label for="chat" class="sr-only">Your message</label>
        <div class="flex items-center py-2 px-3 bg-gray-50 rounded-t-lg dark:bg-gray-700">
            <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Upload image</span>
            </button>
            <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Add emoji</span>
            </button>
            <textarea id="chat"  name="message" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
            <button type="button" onclick="sendMessage()" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                <span class="sr-only">Send message</span>
            </button>
        </div>
        
        
    </form>
    <div id="chat-group" class="bg-slate-200 mr-6 rounded-xl h-[300px] overflow-y-auto scroll-smooth">
        
        <div id='chat-field' class="">
            
            
            
            <div class="flex mt-3 ml-3 w-[90%]">
                <img class="w-8 h-8 rounded-full shadow-lg" src=".." >
                <div class="ml-3 text-sm font-normal w-5/6">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">deva</span>
                    <p class=" break-all">halo</p>
                </div>
                <p class="text-xs self-end">12.00</p>
            </div>
            
            
            
            <div class="flex p-2 mx-auto my-2 rounded bg-white break-words w-[90%]">
                <div class="ml-3 text-sm font-normal  w-5/6">
                    <p class=" break-all">hai</p>
                </div>
                
                <p class="text-xs ml-3 self-end">14.00</p>
            </div>
            
            
            
            
            
        </div>
    </div>
    
    
    
    
    
    
</div>


<div id="modalApply" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="modalApply">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Join Team</h3>
                <form class="space-y-3" action="{{url("/team-detail/910928/apply")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="hidden" id="teamID" name="slug" value="1">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="message" placeholder="Write your thoughts here..."></textarea>
                        
                    </div>
                    <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Choose Roles</label>
                        <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            {{-- <option selected>Choose Roles</option> --}}
                            
                            
                            <option value="1">backend</option>
                            
                            
                        </select>
                    </div>
                    
                    <div>
                        
                        <div class="max-w-xl">
                            <label
                            class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                            <span class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="font-medium text-gray-600">
                                Drop files to Attach, or
                                <span class="text-blue-600 underline">browse</span>
                            </span>
                        </span>
                        <input type="file" name="cv" class="hidden">
                    </label>
                </div>
                
            </div>
            
            
            
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply</button>
            
        </form>
    </div>
</div>
</div>
</div>


<div data-dial-init class="fixed right-6 bottom-6 group md:hidden">
    <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
        <button type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6 -ml-px " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path></svg>
            <span class="sr-only">Share</span>
        </button>
        <div id="tooltip-share" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Share
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Print</span>
        </button>
        <div id="tooltip-print" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Print
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4zm7 5a1 1 0 00-2 0v1.586l-.293-.293a.999.999 0 10-1.414 1.414l2 2a.999.999 0 001.414 0l2-2a.999.999 0 10-1.414-1.414l-.293.293V9z" fill-rule="evenodd"></path></svg>
            <span class="sr-only">Download</span>
        </button>
        <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Download
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 dark:hover:text-white shadow-sm dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path><path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path></svg>
            <span class="sr-only">Copy</span>
        </button>
        <div id="tooltip-copy" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Copy
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script>
    
    // setting tabs
    const tabElements = [
    {
        id: 'profil',
        triggerEl: document.querySelector('#profil-tab'),
        targetEl: document.querySelector('#profil')
    },
    {
        id: 'lowongan',
        triggerEl: document.querySelector('#lowongan-tab'),
        targetEl: document.querySelector('#lowongan')
    },
    {
        id: 'member',
        triggerEl: document.querySelector('#member-tab'),
        targetEl: document.querySelector('#member')
    },
    {
        id: 'projek',
        triggerEl: document.querySelector('#projek-tab'),
        targetEl: document.querySelector('#projek')
    }
    ];
    
    // options with default values
    const options = {
        defaultTabId: 'profil',
        activeClasses: 'text-blue-600 w-full hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500 bg-white',
        inactiveClasses: 'text-white hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
        
    };
    const tabs = new Tabs(tabElements, options);
    
    // setting accordion lowongan
    const accordionItems = [
    {
        id: 'accordion-flush-heading-0',
        triggerEl: document.querySelector('#accordion-flush-heading-0'),
        targetEl: document.querySelector('#accordion-flush-body-0'),
        active: true
    },
    {
        id: 'accordion-flush-heading-2',
        triggerEl: document.querySelector('#accordion-flush-heading-2'),
        targetEl: document.querySelector('#accordion-flush-body-2'),
        active: false
    },
    {
        id: 'accordion-flush-heading-3',
        triggerEl: document.querySelector('#accordion-flush-heading-3'),
        targetEl: document.querySelector('#accordion-flush-body-3'),
        active: false
    }
    ];
    
    // options with default values
    const optionsAccordion = {
        alwaysOpen: true,
        activeClasses: ' dark:bg-gray-800 text-gray-900 dark:text-white',
        inactiveClasses: 'text-gray-500 dark:text-gray-400',
        onOpen: (item) => {
            
        },
        onClose: (item) => {
            
        },
        onToggle: (item) => {
            
        },
    };
    
    const accordion = new Accordion(accordionItems, optionsAccordion);
    
    // setting accordion member
    const accordionItemsMember = [
    {
        id: 'accordion-flush-heading-0',
        triggerEl: document.querySelector('#accordion-flush-heading-0'),
        targetEl: document.querySelector('#accordion-flush-body-0'),
        active: true
    },
    {
        id: 'accordion-member-heading-2',
        triggerEl: document.querySelector('#accordion-member-heading-2'),
        targetEl: document.querySelector('#accordion-member-body-2'),
        active: false
    },
    {
        id: 'accordion-member-heading-3',
        triggerEl: document.querySelector('#accordion-member-heading-3'),
        targetEl: document.querySelector('#accordion-member-body-3'),
        active: false
    }
    ];
    
    // options with default values
    const optionsAccordionMember = {
        alwaysOpen: true,
        activeClasses: ' dark:bg-gray-800 text-gray-900 dark:text-white',
        inactiveClasses: 'text-gray-500 dark:text-gray-400',
        onOpen: (item) => {
            
        },
        onClose: (item) => {
            
        },
        onToggle: (item) => {
            
        },
    };
    
    const accordionMember = new Accordion(accordionItemsMember, optionsAccordionMember);
</script>
</body>

</html>