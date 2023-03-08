<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
    />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body x-data="{card_page:true, current_page:0, active:0, main_menu_lowongan:true, current_page_lowongan:0, active_lowongan:0}">

    <div>
        <p x-text="current_page"></p>
        <p x-text="card_page"></p>
        <p x-text="active"></p>
    </div>
    <!-- Main modal -->
    <div id="modalTim" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full top-10 max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Buat Tim
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="modalTim">
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
                                            
                                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Pembuatan Tim Berhasil</h2>
                                            
                                            <div class="text-gray-600 mb-8">
                                                Silahkan melanjutkan proses berikutnya untuk mengelola tim Anda dan membuka proses rekruitment.
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
                                                
                                                <ol class="flex items-center justify-evenly w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white  rounded-lg   sm:text-base  sm:p-4 sm:space-x-4">
                                                    <li x-bind:class="step == 1 ? 'text-blue-600  : ''" class="flex items-center  ">
                                                        <span x-bind:class="step == 1 ? ' border-blue-600 ' : ''" class="flex items-center justify-center w-5 h-5 mr-2 text-xs border  rounded-full shrink-0 ">
                                                            1
                                                        </span>
                                                        Profil <span class="hidden sm:inline-flex sm:ml-2"></span>
                                                        
                                                    </li>
                                                    <li x-bind:class="step == 2 ? 'text-blue-600 ' : ''" class="flex items-center">
                                                        <span x-bind:class="step == 2 ? ' border-blue-600 ' : ''" class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 ">
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
                                                <label for="nama_tim" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Tim</label>
                                                <input type="text" id="nama_tim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Tim Kage.." required>
                                            </div>
                                            <div class="mb-5">
                                                
                                                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kategori Tim</label>
                                                <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                                                    <option selected>Pilih Kategori</option>
                                                    <option value="Web">Web development</option>
                                                    <option value="Mobile">Mobile Development</option>
                                                    <option value="Game">Game Development</option>
                                                    <option value="Ilustrator">Ilustrator</option>
                                                </select>
                                                
                                            </div>
                                            
                                            <div class="mb-5">
                                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Deskripsi Tim</label>
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
                                                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama Role</label>
                                                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500" placeholder="Frontend, Backend.." required>
                                                            </div>
                                                            <div class="flex w-full items-center">
                                                                <div class="w-full">
                                                                    <label for="colorSelected" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Pilih Warna Role</label>
                                                                    <input id="colorSelected" type="text" placeholder="Pick a color"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
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
                                                <label for="lowongan" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Lowongan & kualifikasi Tim</label>
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
    
    {{-- navbar Mobile --}}
    <nav class="md:hidden lg:mx-20 bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap :text-white">Flowbite</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="button"
                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 :focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow :bg-gray-700 :divide-gray-600"
            id="user-dropdown">
            <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 :text-white">Bonnie Green</span>
                <span
                class="block text-sm font-medium text-gray-500 truncate :text-gray-400">name@flowbite.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Sign
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
<nav class="hidden md:block mx-20 bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap :text-white">Flowbite</span>
        </a>
        <div class="flex md:order-2">
            
            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 :focus:ring-gray-600"
            type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
        </button>
        
        <!-- Dropdown menu -->
        <div id="dropdownAvatar"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 :bg-gray-700 :divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 :text-white">
            <div>Bonnie Green</div>
            <div class="font-medium truncate">name@flowbite.com</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 :text-gray-200"
        aria-labelledby="dropdownUserAvatarButton">
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Dashboard</a>
        </li>
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Settings</a>
        </li>
        <li>
            <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Earnings</a>
        </li>
    </ul>
    <div class="py-2">
        <a href="#"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover:text-white">Sign
        out</a>
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
    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white :bg-gray-800 md::bg-gray-900 :border-gray-700">
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 :text-white"
        aria-current="page">Home</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">About</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Services</a>
    </li>
    <li>
        <a href="#"
        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Contact</a>
    </li>
</ul>
</div>
</div>
</nav>

{{-- Mobile banner --}}
<div class="sm:hidden mx-4 mt-4 flex">
    <div>
        <h3 class="text-blue-400 text-3xl font-bold">Halo,</h3>
        <h1 class="font-bold text-2xl">John Doe</h1>
    </div>
   
</div>
{{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}

{{-- <div class="h-[200px] w-[500px]">
    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_anr54dsb.json"  background="transparent"  speed="1" loop  autoplay>
        
    </lottie-player>
</div> --}}
<div class="hidden lg:block lg:mx-24 h-80 flex flex-row ">
    <div class="flex relative w-full justify-center  space-x-4">
        <div id="cok" class="flex absolute top-0 left-0 h-full flex-col w-full overflow-hidden">
            
            
        </div>
        
        <div class="lg:w-[50%] relative flex-col rounded-lg">
            <div class="flex  text-center justify-center items-center flex-row mt-12">
                
                <h1 class="xl:text-5xl drop-shadow-md font-extrabold bg-clip-text text-transparent bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 text-center flex w-full justify-center font-bold font-poppins">Ayo Buat atau Join Tim Impianmu di TeamUp</h1>
                
       
            </div>
            <div class="mt-10 w-full flex justify-center">
                <button type="button" data-modal-toggle="modalTim" class="text-white flex justify-center bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Buat Tim</button>
            </div>
        
    
    
    
</div>

        </div>
    </div>
</div>


<div class="sm:mx-4 bg-gray-500 flex justify-center ">
    <button x-show="card_page == false" @click="current_page=0; card_page=true; active=0" class="text-white bg-gray-500 p-2 mx-auto rounded-lg">
                
        <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
    </button>
</div>
{{-- <div x-show="card_page" class="mx-10 sm:mx-4 lg:mx-24">
    <h1 class="text-3xl font-semibold">All Team</h1>
    
</div> --}}


{{-- <div class="flex my-3 items-center mx-24 justify-center mb-5  h-[100px] rounded-lg border-dotted border-2">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Buat Tim</button>
</div> --}}

<!-- component -->

<div x-show="card_page == true" class="flex mt-8 mx-2 justify-between lg:grid lg:grid-cols-3 lg:mx-24 gap-x-6 h-[42px] max-h-[42px] ">
    <form class="flex hidden md:block w-[70%] md:w-[70%] lg:w-[85%] items-center h-[42px]">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 :text-gray-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="simple-search"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
        placeholder="Search" required>
    </div>
</form>


<form class="flex w-full md:hidden flex items-center">
    <div class="relative w-full h-full">
        <button class=" absolute inset-y-0 right-0 bg-gray-200 rounded-r-lg flex items-center p-2 ">
            <svg class="w-5 h-5 text-gray-500 :text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </button>
    <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 h-full shadow-md border-none rounded-lg w-full bg-white " placeholder="Cari tim" data-drawer-target="drawer_tugas" data-drawer-show="drawer_tugas"
    data-drawer-placement="right" aria-controls="drawer_tugas">
    </div>
    
    <!-- drawer component -->
    <div id="drawer_tugas"
    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 :bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-right-label"
    class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 :text-gray-400"><svg
    class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
    clip-rule="evenodd"></path>
</svg>Cari Tugas</h5>
<button type="button" data-drawer-hide="drawer_tugas" aria-controls="drawer_tugas"
class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center :hover:bg-gray-600 :hover:text-white">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
<span class="sr-only">Close menu</span>
</button>

<form>
<div class="">
<div>
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kata
        Kunci</label>
        <input type="text" id="first_name"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
        placeholder="Ketikan kata kunci yang diinginkan" required>
    </div>
    <div class="my-4">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Urutkan</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
            <option selected>Paling relevan</option>
            <option value="US">Terbaru</option>
            <option value="CA">Terlama</option>
        </select>
        
    </div>
    <div class="my-4">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kategori</label>
        <select id="countries" class=" lg:hidden h-[42px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
            <option selected>Semua Kategori</option>
            <option value="web">Web Development</option>
            <option value="mobile">Mobile Development</option>
            <option value="ilustrator">Ilustrator</option>
            <option value="graphic">Graphic Design</option>
        </select>
    </div>
    
    
</div>
<button type="submit"
class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Cari</button>
</form>
</div>

</form>

<select id="countries" class="hidden md:block md:w-[30%] lg:w-full h-[42px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
    <option selected>Semua Kategori</option>
    <option value="web">Web Development</option>
    <option value="mobile">Mobile Development</option>
    <option value="ilustrator">Ilustrator</option>
    <option value="graphic">Graphic Design</option>
</select>

<div class="flex hidden md:flex w-[30%]  lg:w-[100%] justify-between">
    <button
    class="w-[50%] hidden md:block h-[42px] text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 :bg-gray-800 :text-white :border-gray-600 :hover:bg-gray-700 :hover:border-gray-600 :focus:ring-gray-700"
    type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
    data-drawer-placement="right" aria-controls="drawer-right-example">
    Filter
</button>

<button type="button"
class="w-[43%] h-[42px] bg-blue-500 text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 ml-auto mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">Cari</button>
</div>



</div>
{{-- search md,lg,xl --}}
<div class="hidden md:block">
    <div class="sm:mx-4 bg-red-500 lg:mx-24 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-4 lg:grid-cols-4 mt-3">
        
    
    
    
  


</div>
</div>


<!-- drawer init and toggle -->


<!-- drawer component -->
<div id="drawer-right-example"
class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 :bg-gray-800"
tabindex="-1" aria-labelledby="drawer-right-label">
<h5 id="drawer-right-label"
class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 :text-gray-400"><svg
class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
clip-rule="evenodd"></path>
</svg>Tambah Filter</h5>
<button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center :hover:bg-gray-600 :hover:text-white">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
<span class="sr-only">Close menu</span>
</button>

<form>
    <div class="">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kata
                Kunci</label>
                <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                placeholder="Ketikan kata kunci yang diinginkan" required>
            </div>
            <div class="my-4">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Urutkan</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                    <option selected>Paling relevan</option>
                    <option value="US">Terbaru</option>
                    <option value="CA">Terlama</option>
                </select>
                
            </div>
            <div class="my-4">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kategori</label>
                <select id="countries" class=" h-[42px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                    <option selected>Semua Kategori</option>
                    <option value="web">Web Development</option>
                    <option value="mobile">Mobile Development</option>
                    <option value="ilustrator">Ilustrator</option>
                    <option value="graphic">Graphic Design</option>
                </select>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                    Tim</label>
                    <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                    placeholder="Ketikan nama tim yang diinginkan" required>
                </div>
                
                
                
                
                
            </div>
            <button type="submit"
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Cari</button>
        </form>
    </div>
    
    <div  x-on:resize.window="window.innerWidth <= 640 && current_page != 0 ? card_page = false : card_page = true" class="lg:mx-24 min-h-screen flex flex-row ">
        <div class="flex w-full space-x-4">
            <div x-show="card_page" class="flex flex-col w-full lg:w-[30%]   overflow-hidden">
                
                <ul class="flex flex-col md:grid md:grid-cols-2 lg:flex lg:flex-col py-4" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    
                    <li @click="current_page=1; window.innerWidth < 1024 ? card_page = false : card_page = true; active=1" class="py-3 sm:py-2 px-2  xl:mr-5">
                        <div 
                        class="rounded-xl border-l-4 shadow-md border-blue-500 block pt-6 pb-6 pl-3 pr-3 bg-white  hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
                        <ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
                            <li class="">
                                <div class="flex cursor-pointer items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="flex">
                                            <img class="w-12 h-12 rounded-full"
                                            src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_05940313-6a3e-41f8-b320-10bd44a5efe9.jpg"
                                            alt="Neil image">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                            Finance & Accounting
                                        </p>
                                        <p class="text-sm text-gray-500 truncate :text-gray-400">
                                            Web development
                                        </p>
                                        
                                        <div class="flex">
                                            
                                            <div class="flex ">
                                                <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                                <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                                <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                                <span class="bg-gray-600 text-xs text-white rounded-full p-2 w-8 h-8">+99</span>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li @click="current_page=1; window.innerWidth < 768 ? card_page = false : card_page = true; active=1" class="py-3 sm:py-2 px-2  xl:mr-5">
                    <a href="#"
                    class="rounded-xl border-l-4 shadow-md border-blue-500 block pt-6 pb-6 pl-3 pr-3 bg-white  hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
                    <ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
                        <li class="">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="flex">
                                        <img class="w-12 h-12 rounded-full"
                                        src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_05940313-6a3e-41f8-b320-10bd44a5efe9.jpg"
                                        alt="Neil image">
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                        Finance & Accounting
                                    </p>
                                    <p class="text-sm text-gray-500 truncate :text-gray-400">
                                        Web development
                                    </p>
                                    
                                    <div class="flex">
                                        
                                        <div class="flex ">
                                            <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                            <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                            <img class="w-8 h-8 border-2 border-white rounded-full :border-gray-800" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                </a>
            </li>
            
        </ul>
        
    </div>
    
    <div :class="card_page == false ? 'block' : 'hidden lg:block'" class="lg:w-[70%] mt-2">
        <div x-show="current_page == 1" class="bg-white rounded-md   justify-start">
            
            <div class="mx-10 mt-3">
                <div class="flex items-center space-x-2 mb-2">
                    <img class="w-10 h-10 xl:w-20 xl:h-20 rounded-full"
                    src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_05940313-6a3e-41f8-b320-10bd44a5efe9.jpg"
                    alt="Rounded avatar">
                    <div>
                        <h1 class="xl:text-2xl font-semibold mt-1">Finance & Accounting </h1>
                        <h1 class="text-gray-500 truncate  ">Team Leader : Ifa Aprillianto </h1>
                        
                    </div>
                    <button x-show="card_page == false" @click="current_page=0; card_page=true; active=0" class="text-gray-200 text-xs rounded-lg p-3">
                        
                        <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                    </button>
                </div>
                
                <div class="flex shadow-md p-2 rounded-xl w-full text-center">
                    <div class="basis-1/4">
                        <h1 class="font-bold text-3xl">99</h1>
                        <p class="text-sm text-gray-600 ">Projek</p>
                    </div>
                    <div class="basis-1/4">
                        <h1 class="font-bold text-3xl">200</h1>
                        <p class="text-sm text-gray-600 ">Tugas</p>
                    </div>
                    <div class="basis-1/4">
                        <h1 class="font-bold text-3xl">10</h1>
                        <p class="text-sm text-gray-600 ">Member</p>
                    </div>
                    <div class="basis-1/4">
                        <h1 class="font-bold text-3xl">5</h1>
                        <p class="text-sm text-gray-600 ">Lowongan</p>
                    </div>
                    
                    
                </div>
                
                
                
                {{-- <div class="flex mt-4">
                    <div>
                        <button type="button"
                        class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">Lamar
                        Sekarang</button>
                    </div>
                    
                    <div class="mx-8">
                        <button type="button"
                        class="text-gray-900  bg-white border border-gray-300  focus:ring-4 focus:outline-none   font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center :focus:ring-[#3b5998]/55 mr-2 mb-2">
                        <svg aria-hidden="true" class="w-6 h-6 -ml-px " fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                    </path>
                </svg>
                <p class="ml-1">Bagikan Rincian Lowongan</p>
            </button>
            
        </div>
        
        <div class="">
            <button type="button"
            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 :bg-gray-800 :text-white :border-gray-600 :hover:bg-gray-700 :hover:border-gray-600 :focus:ring-gray-700">Simpan</button>
        </div>
        
    </div> --}}
</div>
<hr class="h-px my-8 bg-gray-200 border-0 :bg-gray-700">

<div class="mx-10">
    <h1 class="text-xl font-semibold mt-8">Deskripsi Team </h1>
    <p class="text-gray-500 mt-1">Perusahaan akan menerima mahasiswa/i dari berbagai latar belakang
        untuk menjalani kegiatan magang dalam beberapa kelompok yang masing-masing akan mengerjakan
        proyek yang lebih terspesialisasi di dalam perusahaan. </p>
        
        <div class="flex items-center space-x-4 mt-8">
            <h1 class="text-lg mb-1 font-semibold">Posisi Yang Dibutuhkan</h1>
            <button x-show="main_menu_lowongan == false" @click="current_page_lowongan=0; main_menu_lowongan=true; active_lowongan=0" class="text-white bg-gray-500 p-2 rounded-lg">
                
                <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
            </button>
        </div>
        <div x-on:resize.window="window.innerWidth <= 640 && current_page_lowongan != 0 ? main_menu_lowongan = false : main_menu_lowongan = true" class="flex w-full flex-col sm:h-[40vh] sm:h-max-[40vh] md:h-[40vh] md:max-h-[40vh] sm:flex-row xl:flex xl:w-full">
            <div x-show="main_menu_lowongan == true " class=" order-2 h-[40vh]  py-2 sm:h-[40vh] sm:h-max-[40vh] md:h-[40vh] md:max-h-[40vh] sm:order-1 sm:w-1/2 xl:max-h-[40vh] scrollbar xl:overflow-y-auto">
                
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-transparent :bg-gray-900 text-gray-900 :text-white" data-inactive-classes="text-gray-500 :text-gray-400">
                    <ul class="pr-2">
                        <li :class="active_lowongan==1 ? 'border-2 border-blue-500' : ''" class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">
                            
                            <h2 id="accordion-flush-heading-0">
                                <div class="flex items-center justify-between ">
                                    <div id="tooltip_lowongan" @click="current_page_lowongan = 1; window.innerWidth < 640 ? main_menu_lowongan = false : main_menu_lowongan = true; active_lowongan = 1" class="flex items-center h-[64px] w-full">
                                        <span class="text-left text-gray-500 font-medium">Frontend</span>
                                        
                                    </div>
                                    
                                    
                                </div>
                                
                            </h2>
                            
                            
                            
                        </li>
                        <li :class="active_lowongan==2 ? 'border-2 border-blue-500' : ''" class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">
                            
                            <h2 id="accordion-flush-heading-1">
                                <div class="flex items-center justify-between ">
                                    <div id="tooltip_lowongan" @click="current_page_lowongan = 2; window.innerWidth < 640 ? main_menu_lowongan = false : main_menu_lowongan = true; active_lowongan = 2" class="flex items-center h-[64px] w-full">
                                        <span class="text-left text-gray-500 font-medium">Backend</span>
                                        
                                    </div>
                                    
                                </div>
                                
                            </h2>
                            
                            
                            
                        </li>
                        
                        <li :class="active_lowongan==3 ? 'border-2 border-blue-500' : ''" class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">
                            
                            <h2 id="accordion-flush-heading-2">
                                <div class="flex items-center justify-between ">
                                    <div id="tooltip_lowongan" @click="current_page_lowongan = 3; window.innerWidth < 640 ? main_menu_lowongan = false : main_menu_lowongan = true; active_lowongan = 3" class="flex items-center h-[64px] w-full">
                                        <span class="text-left text-gray-500 font-medium">UI/UX</span>
                                        
                                    </div>
                                    
                                    
                                </div>
                                
                            </h2>
                            
                            
                        </li>
                        
                    </ul>
                </div>
                
                
            </div>
            <div :class="current_page_lowongan != 0 ? 'bg-white' : 'bg-gray-100'" class="order-1 sm:order-2 sm:w-1/2 scrollbar overflow-y-auto overflow-x-hidden h-fit max-h-full sm:h-full md:p-2  rounded-md">
                
                <div x-show="current_page_lowongan == 1" :class="current_page_lowongan == 1 ? 'bg-white' : 'bg-gray-50'" class="w-full relative  h-[60vh] h-max-[60vh] sm:h-full sm:h-max-full md:p-2   rounded-lg">
                    
                    
                    <div class="container mx-auto p-2">
                        
                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>
                        
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Memiliki pengalaman minimal 2 tahun sebagai Frontend Developer.</li>
                            <li class="mb-1">Menguasai HTML, CSS, JavaScript, dan framework front-end seperti ReactJS, VueJS, atau AngularJS.</li>
                            <li class="mb-1">Mampu bekerja dalam tim dan berkomunikasi dengan baik.</li>
                            <li class="mb-1">Memiliki kemampuan untuk menyelesaikan masalah dan memiliki kemampuan analitis yang baik.</li>
                            <li class="mb-1">Memiliki portfolio yang menunjukkan keterampilan dalam pengembangan tampilan aplikasi web.</li>
                        </ul>
                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Mengembangkan tampilan antarmuka pengguna (UI) untuk aplikasi web dengan menggunakan HTML, CSS, dan JavaScript.</li>
                            <li class="mb-1">Menggunakan framework front-end seperti ReactJS, VueJS, atau AngularJS untuk membangun aplikasi web yang cepat dan responsif.</li>
                            <li class="mb-1">Menganalisis kebutuhan pengguna dan merancang tampilan yang intuitif dan mudah digunakan.</li>
                            <li class="mb-1">Mengoptimalkan kinerja aplikasi web dan memastikan tampilan yang konsisten di berbagai perangkat dan browser.</li>
                            <li class="mb-1">Bekerja sama dengan tim pengembang backend untuk mengintegrasikan tampilan dengan logika bisnis.</li>
                        </ul>
                    </div>
                    
                    
                    
                </div>
                <div x-show="current_page_lowongan == 2" :class="current_page_lowongan == 2 ? 'bg-white' : 'bg-gray-50'" class="w-full relative  h-[60vh] h-max-[60vh] sm:h-full sm:h-max-full md:p-2   rounded-lg">
                    
                    <div class="container mx-auto p-2">
                        
                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>
                        
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Pengalaman kerja minimal 3 tahun sebagai Backend Developer</li>
                            <li class="mb-1">Memiliki pengetahuan yang kuat tentang bahasa pemrograman seperti Java, Python, atau Node.js</li>
                            <li class="mb-1">Memiliki pengalaman dalam penggunaan framework seperti Spring, Django, atau Express.js</li>
                            <li class="mb-1">Memiliki pemahaman yang baik tentang arsitektur aplikasi dan penggunaan database</li>
                            <li class="mb-1">Memiliki keterampilan dalam mengelola infrastruktur dan pengujian kode</li>
                        </ul>
                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Merancang, mengembangkan, dan memelihara sistem backend untuk aplikasi web dan mobile</li>
                            <li class="mb-1">Berkolaborasi dengan tim frontend untuk memastikan integrasi yang mulus antara frontend dan backend</li>
                            <li class="mb-1">Menerapkan standar keamanan dan perlindungan data dalam sistem</li>
                            <li class="mb-1">Mengevaluasi, memperbaiki, dan memelihara kinerja sistem</li>
                            
                        </ul>
                    </div>
                    
                    
                </div>
                <div x-show="current_page_lowongan == 3" :class="current_page_lowongan == 3 ? 'bg-white' : 'bg-gray-50'" class="w-full relative  h-[60vh] h-max-[60vh] sm:h-full sm:h-max-full md:p-2   rounded-lg">
                    
                    <div class="container mx-auto p-2">
                        
                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>
                        
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Merancang, mengembangkan, dan memelihara desain UI/UX untuk aplikasi web dan mobile</li>
                            <li class="mb-1">Mempelajari kebutuhan pengguna dan merancang pengalaman pengguna yang intuitif dan menarik</li>
                            <li class="mb-1">Berkolaborasi dengan tim pengembang dan pemangku kepentingan untuk mengidentifikasi dan menyelesaikan masalah pengalaman pengguna</li>
                            <li class="mb-1">Mengumpulkan dan menganalisis data pengguna untuk memahami pola perilaku dan mengevaluasi desain</li>
                            <li class="mb-1">Menerapkan prinsip-prinsip desain yang efektif dan efisien, termasuk desain responsif dan aksesibilitas</li>
                        </ul>
                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                        <ul class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                            <li class="mb-1">Merancang, mengembangkan, dan memelihara sistem backend untuk aplikasi web dan mobile</li>
                            <li class="mb-1">Berkolaborasi dengan tim frontend untuk memastikan integrasi yang mulus antara frontend dan backend</li>
                            <li class="mb-1">Menerapkan standar keamanan dan perlindungan data dalam sistem</li>
                            <li class="mb-1">Mengevaluasi, memperbaiki, dan memelihara kinerja sistem</li>
                            
                        </ul>
                    </div>
                    
                </div>
                <div x-show="current_page_lowongan == 0"  class="w-full relative sm:p-2 sm:h-full bg-gray-100 sm:bg-transparent text-gray-300 rounded-lg text-center">
                    Klik salah satu lowongan
                </div>
            </div>
            
        </div>
        
        
        {{-- modal button --}}
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                <!-- Modal header -->
                <div
                class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 :text-white">
                    Frontend Developer
                </h3>
                <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                data-modal-hide="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
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
        <p class="text-base leading-relaxed text-gray-500 :text-gray-400">
            With less than a month to go before the European Union enacts new consumer
            privacy laws for its citizens, companies around the world are updating their
            terms of service agreements to comply.
        </p>
        <p class="text-base leading-relaxed text-gray-500 :text-gray-400">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
            effect on May 25 and is meant to ensure a common set of data rights in the
            European Union. It requires organizations to notify users as soon as possible of
            high-risk data breaches that could personally affect them.
        </p>
    </div>
    <!-- Modal footer -->
    <div
    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b :border-gray-600">
    <button data-modal-hide="defaultModal" type="button"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">I
    accept</button>
    <button data-modal-hide="defaultModal" type="button"
    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 :bg-gray-700 :text-gray-300 :border-gray-500 :hover:text-white :hover:bg-gray-600 :focus:ring-gray-600">Decline</button>
</div>
</div>
</div>
</div>

</div>

{{-- <div class="mx-10 xl:">
    <h1 class="text-lg font-semibold mt-1">Kriteria Yang Dibutuhkan</h1>
    <ul class="text-gray-500 mt-1 mx-4 list-decimal">
        <li>Keterampilan komunikasi dan interpersonal yang luar biasa</li>
        <li>Keterampilan verbal, menulis, dan mengedit yang sangat baik dalam bahasa Inggris</li>
        <li>Kreativitas dan inisiatif tingkat tinggi</li>
        <li>Orang yang giat memotivasi diri, membutuhkan pengawasan minimum</li>
        <li>Proaktif dan mampu bekerja secara efektif dalam tim maupun individu</li>
        <li>Memahami dinamika fungsi penjualan dan bagaimana hal ini mempengaruhi perolehan prospek</li>
        <li>Lebih disukai jika memiliki pengetahuan domain di bidang solusi perangkat lunak untuk
            Enterprise space merupakan nilai tambah</li>
        </ul>
        
    </div> --}}
    
    <hr class="h-px my-8 bg-gray-200 border-0 :bg-gray-700">
    
</div>
<div x-show="current_page == 0" class="bg-gray-100 flex justify-center items-center md:min-h-screen text-center rounded-md sm:mt-5 justify-start">
    <h1 class="">Klik salah satu lowongan</h1>
</div>
</div>

</div>





</div>











<div id="drawer-top-example"
class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white :bg-gray-800"
tabindex="-1" aria-labelledby="drawer-top-label">
<h5 id="drawer-top-label"
class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 :text-gray-400"><svg
class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
clip-rule="evenodd"></path>
</svg>Pencarian</h5>
<button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center :hover:bg-gray-600 :hover:text-white">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd"
d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
clip-rule="evenodd"></path>
</svg>
<span class="sr-only">Close menu</span>
</button>
<div>
    
    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name"
                class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kata Kunci</label>
                <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                placeholder="Ketikan kata kunci yang diinginkan" required>
            </div>
            <div>
                <label for="last_name"
                class="block mb-2 text-sm font-medium text-gray-900 :text-white">Lokasi</label>
                <input type="text" id="last_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                placeholder="Ketikan lokasi yang diinginkan" required>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                    Tim</label>
                    <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                    placeholder="Ketikan nama tim yang diinginkan" required>
                </div>
                
                
                
                
                
            </div>
            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Submit</button>
        </form>
        
    </div>
</div>

{{-- <div class="mt-10 md:hidden">
    
    <a href="/tim-detail"
    class="mx-auto block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
    <ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
        <li class="py-3 sm:py-4">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full"
                    src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_05940313-6a3e-41f8-b320-10bd44a5efe9.jpg"
                    alt="Neil image">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                        Finance & Accounting
                    </p>
                    <p class="text-sm text-gray-500 truncate :text-gray-400">
                        Management Logistik
                    </p>
                    
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>First star</title>
                        <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Second star</title>
                <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Third star</title>
        <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
    </path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fourth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-gray-300 :text-gray-500"
fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fifth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<p class="ml-2 text-sm font-medium text-gray-500 :text-gray-400">4.95 out of 5</p>
</div>


</div>

</div>
</li>
</ul>
</a>
<a href="#"
class="mx-auto mt-6 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
<ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full"
                src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_ba8381d0-87b6-4144-8de7-431ec3359dcd.jpg"
                alt="Neil image">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                    Finance & Accounting
                </p>
                <p class="text-sm text-gray-500 truncate :text-gray-400">
                    Management Logistik
                </p>
                
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>First star</title>
                    <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
        </path>
    </svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <title>Third star</title>
    <path
    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fourth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-gray-300 :text-gray-500"
fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fifth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<p class="ml-2 text-sm font-medium text-gray-500 :text-gray-400">4.95 out of 5</p>
</div>


</div>

</div>
</li>
</ul>
</a>
<a href="#"
class="mx-auto  mt-6 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
<ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full"
                src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_885b571c-49da-4db9-bd5d-ba1cd002af1c.png"
                alt="Neil image">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                    Finance & Accounting
                </p>
                <p class="text-sm text-gray-500 truncate :text-gray-400">
                    Management Logistik
                </p>
                
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>First star</title>
                    <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
        </path>
    </svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <title>Third star</title>
    <path
    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fourth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-gray-300 :text-gray-500"
fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fifth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<p class="ml-2 text-sm font-medium text-gray-500 :text-gray-400">4.95 out of 5</p>
</div>


</div>

</div>
</li>
</ul>
</a>
<a href="#"
class="mx-auto  mt-6 mb-16  block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 :bg-gray-800 :border-gray-700 :hover:bg-gray-700">
<ul role="list" class="divide-y divide-gray-200 :divide-gray-700">
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full"
                src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_36a38123-6af2-405d-b917-589f75a58fc5.png"
                alt="Neil image">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                    Finance & Accounting
                </p>
                <p class="text-sm text-gray-500 truncate :text-gray-400">
                    Management Logistik
                </p>
                
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>First star</title>
                    <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Second star</title>
            <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
        </path>
    </svg>
    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <title>Third star</title>
    <path
    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fourth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<svg aria-hidden="true" class="w-5 h-5 text-gray-300 :text-gray-500"
fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<title>Fifth star</title>
<path
d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
</path>
</svg>
<p class="ml-2 text-sm font-medium text-gray-500 :text-gray-400">4.95 out of 5</p>
</div>


</div>

</div>
</li>
</ul>
</a>

</div>


<div class="md:hidden bg-white fixed bottom-0 border-b border-gray-200 :border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 :text-gray-400">
        <li class="mr-2">
            <a href="/"
            class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
        </path>
    </svg>Home
</a>
</li>
<li class="mr-2">
    <a href="#"
    class="inline-flex p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active_lowongan_lowongan_lowongan :text-blue-500 :border-blue-500 group"
    aria-current="page">
    <svg aria-hidden="true" class="w-5 h-5 mr-2 text-blue-600 :text-blue-500" fill="currentColor"
    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
</path>
</svg>All Team
</a>
</li>
<li class="mr-2">
    <a href="#"
    class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
    <svg aria-hidden="true"
    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 :text-gray-500 :group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
    <path fill-rule="evenodd"
    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
    clip-rule="evenodd"></path>
</svg>My Team
</a>
</li>
<li class="mr-2">
    <a href="#"
    class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
    <svg aria-hidden="true"
    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 :text-gray-500 :group-hover:text-gray-300"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
</path>
</svg>Settings
</a>
</li>

</ul>
</div> --}}
<!-- Main modal -->





<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('anim-container'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: "{{asset('lottie/robot.json')}}"
    });
    var se = bodymovin.loadAnimation({
        container: document.getElementById('cok'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: "{{asset('lottie/bubble.json')}}"
    });
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