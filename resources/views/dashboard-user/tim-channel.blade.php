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
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"
        integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />


    <style>
        .hover-trigger:hover .hidden {
            visibility: visible;
        }

        trix-editor ul {
            list-style-type: disc !important;
            margin-left: 1rem !important;
        }

        trix-editor ol {
            list-style-type: decimal !important;
            margin-left: 1rem !important;
        }
    </style>


    @vite('resources/css/app.css')
</head>

<body x-data="{mode:'leader', status:'Buka'}" class="overflow-y-hidden bg-slate-100">



    {{-- navbar Mobile --}}
    <nav class="md:hidden lg:mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{asset('assets/img/team-4.jpg')}}" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
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
    <nav class="hidden md:block mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">

                <span class="self-center text-xl font-semibold whitespace-nowrap :text-white">TeamUp</span>
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
                            <a href="/profil"
                                class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Profil
                                Saya</a>
                        </li>

                        <li class="px-4">

                            <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-4 py-2.5 text-center inline-flex items-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
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
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  :bg-gray-800 md::bg-gray-900 :border-gray-700">

                    <li>
                        <a href="/tim-channel"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 :text-white"
                            aria-current="page">Tim channel</a>
                    </li>
                    <li>
                        <a href="/tim-saya"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            Saya</a>
                    </li>
                    <li>
                        <a href="/tim-list"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            List</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="xl:mx-10 xl:max-h-screen md:flex justify-between font-poppins ">

        <div class="bg-white absolute top-10 sm:static from-sky-400 to-blue-800 p-2 md:p-4 rounded-2xl w-full h-[100vh] h-max-[100vh]  sm:w-full md:w-full  xl:max-h-[80vh] mt-5 "
            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

            <div class="mb-4 border-b border-gray-200  text-lg">
                <ul class=" hidden sm:flex sm:flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class=" basis-1/5" role="presentation">
                        <button class="inline-block p-4 pt-6 rounded-t-lg border-b-2 border-transparent   text-sm "
                            id="profil-tab" data-tabs-target="#profil" type="button" role="tab" aria-controls="profil"
                            aria-selected="true">Profil Tim</button>
                    </li>
                    <li class=" basis-1/5" role="presentation">
                        <button
                            class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm  :text-gray-400 border-gray-100 :border-gray-700"
                            id="lowongan-tab" data-tabs-target="#lowongan" type="button" role="tab"
                            aria-controls="lowongan" aria-selected="false">Lowongan</button>
                    </li>

                    <li class=" basis-1/5 " role="presentation">
                        <button
                            class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm  :text-gray-400 border-gray-100 :border-gray-700"
                            id="member-tab" data-tabs-target="#member" type="button" role="tab" aria-controls="member"
                            aria-selected="false">Member</button>
                    </li>


                    <li class=" basis-1/5" role="presentation">
                        <button
                            class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm  :text-gray-400 border-gray-100 :border-gray-700"
                            id="projek-tab" data-tabs-target="#projek" type="button" role="tab" aria-controls="projek"
                            aria-selected="false">Project</button>
                    </li>


                    <li class="basis-1/5" role="presentation">
                        <div x-show="mode=='leader'" class="h-full justify-center flex items-center">
                            <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                <input type="checkbox" @click="status == 'Buka' ? status='Tutup' : status = 'Buka' "
                                    value="" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer :bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 :peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all :border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 :text-gray-300 text-white"
                                    x-text="status"></span>
                            </label>
                        </div>
                        <div x-show="mode=='member'" class="h-full justify-center mt-1 flex items-center">
                            <button type="button" data-modal-toggle="modalResign"
                                class="text-white bg-red-300 shadow-md hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 :bg-red-600 :hover:bg-red-700 :focus:ring-red-900">Resign</button>
                            <!-- Main modal -->
                            <div id="modalResign" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                                Resign
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                                data-modal-hide="modalResign">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="">Pesan resign</label>
                                            <trix-editor input="lowongan">

                                            </trix-editor>
                                            <button type="butotn" onclick="updateName()"
                                                class="w-1/2 block mx-auto mt-6 mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Update</button>
                                        </div>
                                        <!-- Modal footer -->


                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <button
                            class="inline-block  p-4 pt-6 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm  :text-gray-400 border-gray-100 :border-gray-700"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Task</button> --}}
                    </li>




                    {{-- <li role="presentation" class="ml-auto">
                        <button data-modal-toggle="modalApply" type="submit"
                            class="inline-block p-4 w-full float-right bg-[#26ff12] rounded-full text-white shadow">Apply</button>
                    </li>
                    --}}


                    {{-- <li role="presentation" class="ml-auto ">
                        <div class="inline-block py-4 mt-1 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm text-gray-500 :text-gray-400 border-gray-100 :border-gray-700"
                            id="contacts-tab">
                            <label class="inline-flex relative items-center mr-5  cursor-pointer">
                                <input type="checkbox" value="open" onclick="updateStatusTim()" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer :bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 :peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all :border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span id="status-tim"
                                    class="ml-3 text-sm font-medium text-gray-900 :text-gray-300">open</span>
                            </label>
                        </div>

                    </li> --}}

                    {{-- <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 :border-transparent text-sm text-gray-500 :text-gray-400 border-gray-100 :border-gray-700"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                        aria-selected="false"> --}}

                        {{-- </button> --}}
                </ul>
            </div>
            <div id="myTabContent">
                <div class="p-4 bg-gray-50 h-[80vh] h-max-[80vh] sm:h-[80vh] sm:h-max-[80vh] md:h-[80vh] md:max-h-[80vh] lg:h-[60vh] lg:max-h-[60vh] overflow-y-auto scrollbar rounded-lg :bg-gray-800"
                    id="profil" role="tabpanel" aria-labelledby="profil-tab">

                    <div class="flex flex-col md:flex-row md:gap-x-2 xl:flex xl:w-full md:h-[200px] xl:px-2">

                        <div class="w-[30%] justify-center mx-auto md:w-[30%] ">

                            <div class=" relative hover-trigger w-full h-full">
                                <img src="{{asset('/assets/tim/1.png')}}"
                                    class="mx-auto  max-h-[80px]  sm:max-h-[100px] sm:max-w-full md:mx-0 md:max-h-full xl:max-w-full  rounded-2xl"
                                    alt="">
                                <button x-show="mode=='leader'"
                                    class=" absolute  bottom-0 max-[333px]:left-[35%] max-[768px]:left-[44%] md:left-[42%] inline-flex items-center justify-center  overflow-hidden text-sm font-medium rounded-lg  "
                                    type="button" data-modal-toggle="modalLogo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: #577CFF;transform: ;msFilter:;">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>

                                </button>
                            </div>


                            <!-- Main modal -->
                            <div id="modalLogo" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                                Logo
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                                data-modal-hide="modalLogo">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <div class="mx-auto w-1/2 h-1/2 md:w-1/3 md:h-1/3 mb-4 shadow-inset">
                                                <input class="my-pond" type="file" class="filepond" name="filepond"
                                                    accept="image/png, image/jpeg, image/gif" />
                                            </div>



                                            <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-5">Klik untuk
                                                mengunggah logo</div>


                                            <button type="butotn" onclick="updateName()"
                                                class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Update</button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="md:w-[70%] min-[900px]:w-[90%] lg:w-[90%] ">
                            <div class="flex justify-center gap-x-2 xl:mb-1">
                                <h1 class="text-[#313131] text-xl font-semibold" id="team_name">Connect Technologi Team
                                </h1>

                                <button x-show="mode=='leader'"
                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                    type="button" data-modal-toggle="modalTitle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: #577CFF;transform: ;msFilter:;">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>

                                </button>



                                <div id="modalTitle" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow ">


                                            <div class="">
                                                <div class="flex justify-end px-1 pt-4">

                                                    <!-- Dropdown menu -->
                                                    <button id="btn-modal-name" type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                                                        data-modal-toggle="modalTitle">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="flex flex-col items-center pb-10">


                                                    <div class="w-full px-5">
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 :text-white">Team
                                                            Name</label>
                                                        <input type="text" id="name" name="name"
                                                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                            placeholder="John" required value="Connect Technologi Team">
                                                    </div>

                                                    <button type="butotn" onclick="updateName()"
                                                        class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Update</button>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="md:mb-10 xl:mb-12">
                                <p class="text-[#7D7777] text-center text-sm font-normal">Dibuat oleh : Albert</p>
                                <p class="text-[#7D7777]  text-center text-sm font-normal">Kategori : Web Development
                                </p>
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

                            {{-- <div class="flex mx-auto w-full shadow-md rounded text-center">

                                <div class="basis-1/4">
                                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 24 24" style="fill: rgb(250 204 21 / 1);transform: ;msFilter:;">
                                        <path
                                            d="M21 5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5zM5 19V5h14l.002 14H5z">
                                        </path>
                                        <path
                                            d="M7 7h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6z">
                                        </path>
                                    </svg>
                                    <p class="text-yellow-400 text-xs font-poppins font-semibold">Lowongan</p>
                                    <p class=" text-yellow-400 text-lg font-poppins font-semibold">5</p>
                                </div>
                                <div class="basis-1/4">

                                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 24 24" style="fill: 
                                    rgb(96 165 250 / 1);transform: ;msFilter:;">
                                        <path
                                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                                        </path>
                                        <path
                                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                                        </path>
                                    </svg>

                                    <p class="text-blue-400 text-xs font-poppins font-semibold">Projek</p>
                                    <p class=" text-blue-400 text-lg font-poppins font-semibold">50</p>
                                </div>
                                <div class="basis-1/4">
                                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 24 24" style="fill: rgb(74 222 128 / 1);transform: ;msFilter:;">
                                        <path
                                            d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z">
                                        </path>
                                        <path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z">
                                        </path>
                                    </svg>
                                    <p class="text-green-400 text-xs font-poppins font-semibold">Tugas</p>
                                    <p class=" text-green-400 text-lg font-poppins font-semibold">2000</p>
                                </div>
                                <div class="basis-1/4">
                                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 24 24" style="fill: rgb(251 146 60 / 1);transform: ;msFilter:;">
                                        <path
                                            d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                                        </path>
                                    </svg>
                                    <p class="text-orange-400 text-xs font-poppins font-semibold">Member</p>
                                    <p class=" text-orange-400 text-lg font-poppins font-semibold">10</p>
                                </div>

                            </div> --}}


                        </div>
                    </div>

                    <div class="mt-4 flex xl:mt-2  xl:px-2">
                        <h1 class="text-[#313131] text-lg font-semibold ">Deskripsi :</h1>

                        <button x-show="mode=='leader'"
                            class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg"
                            type="button" data-modal-toggle="modalDescription">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: #577CFF;transform: ;msFilter:;">
                                <path
                                    d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                </path>
                                <path
                                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                </path>
                            </svg>

                        </button>


                        <div id="modalDescription" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow ">
                                    <div class="">
                                        <div class="flex justify-end px-1 pt-4">

                                            <!-- Dropdown menu -->
                                            <button type="button" id='btn-modal-desc'
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                                                data-modal-toggle="modalDescription">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <div class="flex flex-col items-center pb-10">




                                            <div class="w-full px-4">
                                                <label for="description"
                                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Description</label>
                                                <textarea id="description" name="description" rows="4"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                    placeholder="Describe your team here...">desc</textarea>

                                            </div>
                                            <button type="submit"
                                                class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
                                                onclick="updateDesc()">Update</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400"
                        id="description_team">Tim pengembang perangkat lunak yang handal dan berpengalaman dalam
                        membangun aplikasi web dan mobile. Kami juga ahli dalam pemrograman dengan berbagai bahasa
                        seperti JavaScript, Python, dan Ruby</p>

                </div>
                <div x-data="{ current_page_lowongan: 0, main_menu_lowongan : true, active:0 }"
                    x-on:resize.window="window.innerWidth <= 640 && current_page_lowongan != 0 ? main_menu_lowongan = false : main_menu_lowongan = true"
                    class="hidden relative h-[80vh] h-max-[80vh] sm:h-[80vh] sm:h-max-[80vh] md:h-[80vh] md:max-h-[80vh] lg:h-[60vh] lg:max-h-[60vh] p-4 bg-gray-50 rounded-lg :bg-gray-800"
                    id="lowongan" role="tabpanel" aria-labelledby="lowongan-tab">

                    <div x-show="mode=='leader'"
                        class="flex  flex-col space-y-2 sm:flex-row justify-between items-center h-[50px] gap-x-2 mb-8 sm:mb-2 ">
                        {{-- <button onclick="fetchTask()"
                            class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                            type="button" data-modal-toggle="modalTask">

                        </button> --}}

                        <button type="button"
                            class="mr-auto mb-2 text-white h-full bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs p-2 shadow-md  md:text-sm sm:px-5 sm:py-2.5 text-center inline-flex items-center "
                            data-modal-toggle="modalLowongan">
                            <svg class="mr-1 inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill:rgb(255, 255, 255);transform: ;msFilter:;">
                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                <path
                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                </path>
                            </svg>
                            Tambah
                        </button>
                        <div id="modalLowongan" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                            Lowongan
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                            data-modal-hide="modalLowongan">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div x-data="app()" x-cloak class="p-6 space-y-6">
                                        <form>
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                <div class="">
                                                    <label for="first_name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                                                        Role</label>
                                                    <input type="text" id="first_name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="Frontend, Backend.." required>
                                                </div>
                                                <div class="flex w-full items-center">
                                                    <div class="w-full">
                                                        <label for="colorSelected"
                                                            class="block mb-2 text-sm font-medium text-gray-900 :text-white">Pilih
                                                            Warna Role</label>
                                                        <input id="colorSelected" type="text" placeholder="Pick a color"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                            readonly x-model="colorSelected">
                                                    </div>
                                                    <div class="relative ml-3 mt-6">
                                                        <button type="button" @click="isOpen = !isOpen"
                                                            class="w-10 h-10 rounded-full focus:outline-none focus:shadow-outline inline-flex p-2 shadow"
                                                            :style="`background: ${colorSelected}; color: white`">
                                                            <svg class="w-6 h-6 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path fill="none"
                                                                    d="M15.584 10.001L13.998 8.417 5.903 16.512 5.374 18.626 7.488 18.097z" />
                                                                <path
                                                                    d="M4.03,15.758l-1,4c-0.086,0.341,0.015,0.701,0.263,0.949C3.482,20.896,3.738,21,4,21c0.081,0,0.162-0.01,0.242-0.03l4-1 c0.176-0.044,0.337-0.135,0.465-0.263l8.292-8.292l1.294,1.292l1.414-1.414l-1.294-1.292L21,7.414 c0.378-0.378,0.586-0.88,0.586-1.414S21.378,4.964,21,4.586L19.414,3c-0.756-0.756-2.072-0.756-2.828,0l-2.589,2.589l-1.298-1.296 l-1.414,1.414l1.298,1.296l-8.29,8.29C4.165,15.421,4.074,15.582,4.03,15.758z M5.903,16.512l8.095-8.095l1.586,1.584 l-8.096,8.096l-2.114,0.529L5.903,16.512z" />
                                                            </svg>
                                                        </button>

                                                        <div x-show="isOpen" @click.away="isOpen = false"
                                                            x-transition:enter="transition ease-out duration-100 transform"
                                                            x-transition:enter-start="opacity-0 scale-95"
                                                            x-transition:enter-end="opacity-100 scale-100"
                                                            x-transition:leave="transition ease-in duration-75 transform"
                                                            x-transition:leave-start="opacity-100 scale-100"
                                                            x-transition:leave-end="opacity-0 scale-95"
                                                            class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg">
                                                            <div class="rounded-md bg-white shadow-xs px-4 py-3">
                                                                <div class="flex flex-wrap -mx-2">
                                                                    <template x-for="(color, index) in colors"
                                                                        :key="index">
                                                                        <div class="px-2">
                                                                            <template x-if="colorSelected === color">
                                                                                <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white"
                                                                                    :style="`background: ${color}; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);`">
                                                                                </div>
                                                                            </template>

                                                                            <template x-if="colorSelected != color">
                                                                                <div @click="colorSelected = color"
                                                                                    @keydown.enter="colorSelected = color"
                                                                                    role="checkbox" tabindex="0"
                                                                                    :aria-checked="colorSelected"
                                                                                    class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                                                    :style="`background: ${color};`">
                                                                                </div>
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
                                                <label for="lowongan"
                                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kualifikasi</label>
                                                <input id="lowongan" type="hidden" name="content">
                                                <trix-editor input="lowongan">

                                                </trix-editor>
                                            </div>
                                        </form>





                                        <button type="butotn" onclick="updateName()"
                                            class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Tambah</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Modal Add Requirement --}}
                    <div id="modalAddRequirement" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                <button type="button" id="btn-modal-requirement"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                    data-modal-toggle="modalAddRequirement">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Add Requirement</h3>


                                    <div class="" id="requirement">
                                        <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][role]" id="requirement"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                    placeholder="role..." required>
                                            </div>

                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][salary]" id="requirement-salary"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                    placeholder="salary..." required>
                                            </div>

                                            <div class="basis-[40%] relative" id="qualification-area">

                                                <div class="relative">

                                                    <input name="requirement[0][qualification][]" id="qualification"
                                                        class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="qualification" required>
                                                    <button type="button" onclick="tambahChild(this,0)"
                                                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">
                                                        <i class='bx bxs-plus-circle'></i></button>
                                                    {{-- <button type="button" onclick="tambah()">
                                                        <i class='bx bxs-plus-circle'></i>
                                                    </button> --}}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <button type="buttton" onclick="addRequirement()"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Create</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Edit Requirement --}}
                    <div id="modalEditRequirement" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                <button type="button" id="btn-close-modalEditRequirement"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                    onclick="closeModalEditRequirement()">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Edit Requirement</h3>


                                    <div class="" id="requirement">
                                        <div class="flex justify-between gap-x-2 flex-row items-center mb-3 relative">
                                            <div class="basis-[30] relative">
                                                <input type="text" name="requirement[0][role]" id="role"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                    placeholder="role..." required>
                                            </div>
                                            <div class="basis-[30%] relative">
                                                <input type="text" name="requirement[0][salary]" id="salary"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                    placeholder="salary..." required>
                                            </div>
                                            <div class="basis-[40%] relative" id="parent-qualification">

                                                <div class="relative mt-8">

                                                    <button type="button" onclick="tambahChild(this,0, 'edit')"
                                                        class="text-white  absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">
                                                        <i class='bx bxs-plus-circle'></i></button>
                                                    {{-- <button type="button" onclick="tambah()">
                                                        <i class='bx bxs-plus-circle'></i>
                                                    </button> --}}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <button type="buttton" id="button-update-requirement"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Update</button>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="w-full h-[90%]" id="requirement-section">


                        <div
                            class="flex w-full flex-col sm:h-[70vh] sm:h-max-[70vh]  md:h-[40vh] md:max-h-[40vh]  sm:flex-row xl:flex xl:w-full">
                            <div x-show="main_menu_lowongan == true "
                                class=" order-2 h-[70vh]  py-2 sm:h-[70vh] sm:h-max-[70vh] md:h-[40vh] md:max-h-[40vh]  sm:order-1 sm:w-1/2 xl:max-h-[40vh] scrollbar xl:overflow-y-auto">

                                <div id="accordion-flush" data-accordion="collapse"
                                    data-active-classes="bg-transparent :bg-gray-900 text-gray-900 :text-white"
                                    data-inactive-classes="text-gray-500 :text-gray-400">
                                    <ul class="pr-2">
                                        <li :class="active==1 ? 'border-2 border-blue-500' : ''"
                                            class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">

                                            <h2 id="accordion-flush-heading-0">
                                                <div class="flex items-center justify-between ">
                                                    <div id="tooltip_lowongan"
                                                        @click="current_page_lowongan = 1; window.innerWidth < 500 ? main_menu_lowongan = false : main_menu_lowongan = true; active = 1"
                                                        class="flex items-center h-[64px] w-full">
                                                        <span
                                                            class="text-left text-gray-500 font-medium">Frontend</span>
                                                        <span
                                                            class="bg-green-100 ml-2 w-20 h-5 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300"></span>
                                                    </div>

                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-flush-body-0"
                                                        aria-expanded="false" aria-controls="accordion-flush-body-0">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </h2>
                                            <div id="accordion-flush-body-0" class="hidden"
                                                aria-labelledby="accordion-flush-heading-0">
                                                <div class="pb-2 font-light border-t border-gray-200 :border-gray-700">
                                                    <div x-show="mode=='leader'"
                                                        class="flex w-full justify-evenly shadow-md">
                                                        <button
                                                            class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button" data-modal-toggle="modalEditLowongan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: #577CFF;transform: ;msFilter:;">
                                                                <path
                                                                    d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                                </path>
                                                                <path
                                                                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <span class="text-xl">|</span>
                                                        <button onclick="swall()"
                                                            class="relative inline-flex items-center justify-center   overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                                <path
                                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                </path>
                                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="tooltip-arrow" data-popper-arrow></div>


                                                    </div>


                                                    <div class="container mx-auto p-2">

                                                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>

                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Memiliki pengalaman minimal 2 tahun sebagai
                                                                Frontend Developer.</li>
                                                            <li class="mb-1">Menguasai HTML, CSS, JavaScript, dan
                                                                framework front-end seperti ReactJS, VueJS, atau
                                                                AngularJS.</li>
                                                            <li class="mb-1">Mampu bekerja dalam tim dan berkomunikasi
                                                                dengan baik.</li>
                                                            <li class="mb-1">Memiliki kemampuan untuk menyelesaikan
                                                                masalah dan memiliki kemampuan analitis yang baik.</li>
                                                            <li class="mb-1">Memiliki portfolio yang menunjukkan
                                                                keterampilan dalam pengembangan tampilan aplikasi web.
                                                            </li>
                                                        </ul>
                                                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Mengembangkan tampilan antarmuka pengguna
                                                                (UI) untuk aplikasi web dengan menggunakan HTML, CSS,
                                                                dan JavaScript.</li>
                                                            <li class="mb-1">Menggunakan framework front-end seperti
                                                                ReactJS, VueJS, atau AngularJS untuk membangun aplikasi
                                                                web yang cepat dan responsif.</li>
                                                            <li class="mb-1">Menganalisis kebutuhan pengguna dan
                                                                merancang tampilan yang intuitif dan mudah digunakan.
                                                            </li>
                                                            <li class="mb-1">Mengoptimalkan kinerja aplikasi web dan
                                                                memastikan tampilan yang konsisten di berbagai perangkat
                                                                dan browser.</li>
                                                            <li class="mb-1">Bekerja sama dengan tim pengembang backend
                                                                untuk mengintegrasikan tampilan dengan logika bisnis.
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </li>
                                        <li :class="active==2 ? 'border-2 border-blue-500' : ''"
                                            class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">

                                            <h2 id="accordion-flush-heading-1">
                                                <div class="flex items-center justify-between ">
                                                    <div id="tooltip_lowongan"
                                                        @click="current_page_lowongan = 2; window.innerWidth < 500 ? main_menu_lowongan = false : main_menu_lowongan = true; active = 2"
                                                        class="flex items-center h-[64px] w-full">
                                                        <span class="text-left text-gray-500 font-medium">Backend</span>
                                                        <span
                                                            class="bg-yellow-100 ml-2 w-20 h-5 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300"></span>
                                                    </div>

                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-flush-body-1"
                                                        aria-expanded="false" aria-controls="accordion-flush-body-1">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </h2>
                                            <div id="accordion-flush-body-1" class="hidden"
                                                aria-labelledby="accordion-flush-heading-1">
                                                <div class="pb-2 font-light border-t border-gray-200 :border-gray-700">
                                                    <div x-show="mode=='leader'"
                                                        class="flex w-full justify-evenly shadow-md">
                                                        <button
                                                            class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button" data-modal-toggle="modalEditLowongan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: #577CFF;transform: ;msFilter:;">
                                                                <path
                                                                    d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                                </path>
                                                                <path
                                                                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <span class="text-xl">|</span>
                                                        <button onclick="swall()"
                                                            class="relative inline-flex items-center justify-center   overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                                <path
                                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                </path>
                                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="tooltip-arrow" data-popper-arrow></div>


                                                    </div>


                                                    <div class="container mx-auto p-2">

                                                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>

                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Pengalaman kerja minimal 3 tahun sebagai
                                                                Backend Developer</li>
                                                            <li class="mb-1">Memiliki pengetahuan yang kuat tentang
                                                                bahasa pemrograman seperti Java, Python, atau Node.js
                                                            </li>
                                                            <li class="mb-1">Memiliki pengalaman dalam penggunaan
                                                                framework seperti Spring, Django, atau Express.js</li>
                                                            <li class="mb-1">Memiliki pemahaman yang baik tentang
                                                                arsitektur aplikasi dan penggunaan database</li>
                                                            <li class="mb-1">Memiliki keterampilan dalam mengelola
                                                                infrastruktur dan pengujian kode</li>
                                                        </ul>
                                                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Merancang, mengembangkan, dan memelihara
                                                                sistem backend untuk aplikasi web dan mobile</li>
                                                            <li class="mb-1">Berkolaborasi dengan tim frontend untuk
                                                                memastikan integrasi yang mulus antara frontend dan
                                                                backend</li>
                                                            <li class="mb-1">Menerapkan standar keamanan dan
                                                                perlindungan data dalam sistem</li>
                                                            <li class="mb-1">Mengevaluasi, memperbaiki, dan memelihara
                                                                kinerja sistem</li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </li>
                                        <li :class="active==3 ? 'border-2 border-blue-500' : ''"
                                            class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">

                                            <h2 id="accordion-flush-heading-2">
                                                <div class="flex items-center justify-between ">
                                                    <div id="tooltip_lowongan"
                                                        @click="current_page_lowongan = 3; window.innerWidth < 500 ? main_menu_lowongan = false : main_menu_lowongan = true; active = 3"
                                                        class="flex items-center h-[64px] w-full">
                                                        <span class="text-left text-gray-500 font-medium">UI/UX</span>
                                                        <span
                                                            class="bg-red-100 ml-2 w-20 h-5 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300"></span>
                                                    </div>

                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-flush-body-2"
                                                        aria-expanded="false" aria-controls="accordion-flush-body-2">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </h2>
                                            <div id="accordion-flush-body-2" class="hidden"
                                                aria-labelledby="accordion-flush-heading-2">
                                                <div class="pb-2 font-light border-t border-gray-200 :border-gray-700">
                                                    <div x-show="mode=='leader'"
                                                        class="flex w-full justify-evenly shadow-md">
                                                        <button
                                                            class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button" data-modal-toggle="modalEditLowongan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: #577CFF;transform: ;msFilter:;">
                                                                <path
                                                                    d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                                </path>
                                                                <path
                                                                    d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <span class="text-xl">|</span>
                                                        <button onclick="swall()"
                                                            class="relative inline-flex items-center justify-center   overflow-hidden text-sm font-medium rounded-lg"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24"
                                                                style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                                <path
                                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                                </path>
                                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="tooltip-arrow" data-popper-arrow></div>


                                                    </div>


                                                    <div class="container mx-auto p-2">

                                                        <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>

                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Merancang, mengembangkan, dan memelihara
                                                                desain UI/UX untuk aplikasi web dan mobile</li>
                                                            <li class="mb-1">Mempelajari kebutuhan pengguna dan
                                                                merancang pengalaman pengguna yang intuitif dan menarik
                                                            </li>
                                                            <li class="mb-1">Berkolaborasi dengan tim pengembang dan
                                                                pemangku kepentingan untuk mengidentifikasi dan
                                                                menyelesaikan masalah pengalaman pengguna</li>
                                                            <li class="mb-1">Mengumpulkan dan menganalisis data pengguna
                                                                untuk memahami pola perilaku dan mengevaluasi desain
                                                            </li>
                                                            <li class="mb-1">Menerapkan prinsip-prinsip desain yang
                                                                efektif dan efisien, termasuk desain responsif dan
                                                                aksesibilitas</li>
                                                        </ul>
                                                        <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                                                        <ul
                                                            class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                                            <li class="mb-1">Merancang, mengembangkan, dan memelihara
                                                                sistem backend untuk aplikasi web dan mobile</li>
                                                            <li class="mb-1">Berkolaborasi dengan tim frontend untuk
                                                                memastikan integrasi yang mulus antara frontend dan
                                                                backend</li>
                                                            <li class="mb-1">Menerapkan standar keamanan dan
                                                                perlindungan data dalam sistem</li>
                                                            <li class="mb-1">Mengevaluasi, memperbaiki, dan memelihara
                                                                kinerja sistem</li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </li>

                                    </ul>
                                </div>


                            </div>
                            <div :class="current_page_lowongan != 0 ? 'bg-white' : 'bg-gray-100'"
                                class="order-1 sm:order-2 sm:w-1/2 scrollbar relative overflow-y-auto overflow-x-hidden h-fit max-h-full sm:h-full md:h-[40vh] md:max-h-[40vh]  md:p-2  rounded-md">

                                <div x-show="current_page_lowongan == 1"
                                    :class="current_page_lowongan == 1 ? 'bg-white' : 'bg-gray-50'"
                                    class="w-full relative  h-[80vh] h-max-[80vh] sm:h-full sm:h-max-full md:h-[70vh] md:h-max-[70vh] md:p-2   rounded-lg">

                                    {{-- Pelamar --}}
                                    <h1 class="py-1 text-lg font-semibold text-center">Pelamar <span>Frontend</span>
                                    </h1>
                                    <p class="text-sm text-center text-[#7D7777] :text-gray-400">total : 4 pelamar</p>



                                    <ul class="max-w-md px-3 mt-5 divide-y divide-gray-200 :divide-gray-700">

                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-1.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Ashley
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        10 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-2.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Leo
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        30 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-3.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Justin
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        1 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-4.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Edward
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        4 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>




                                    </ul>
                                    {{-- End Pelamar --}}



                                </div>
                                <div x-show="current_page_lowongan == 2"
                                    :class="current_page_lowongan == 2 ? 'bg-white' : 'bg-gray-50'"
                                    class="w-full relative  h-[80vh] h-max-[80vh] sm:h-full sm:h-max-full md:p-2 md:h-[70vh] md:h-max-[70vh]  rounded-lg">

                                    {{-- Pelamar --}}
                                    <h1 class="py-1 text-lg font-semibold text-center">Pelamar <span>Backend</span></h1>
                                    <p class="text-sm text-center text-[#7D7777] :text-gray-400">total : 10 pelamar</p>



                                    <ul class="max-w-md px-3 mt-5 divide-y divide-gray-200 :divide-gray-700">

                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-1.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Ashley
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        10 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-2.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Leo
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        30 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-3.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Justin
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        1 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-4.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Edward
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        4 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>




                                    </ul>
                                    {{-- End Pelamar --}}



                                </div>
                                <div x-show="current_page_lowongan == 3"
                                    :class="current_page_lowongan == 3 ? 'bg-white' : 'bg-gray-50'"
                                    class="w-full relative  h-[80vh] h-max-[80vh] sm:h-full sm:h-max-full md:p-2 md:h-[70vh] md:h-max-[70vh]  rounded-lg">

                                    {{-- Pelamar --}}
                                    <h1 class="py-1 text-lg font-semibold text-center">Pelamar <span>UI/UX</span></h1>
                                    <p class="text-sm text-center text-[#7D7777] :text-gray-400">total : 7 pelamar</p>



                                    <ul class="max-w-md px-3 mt-5 divide-y divide-gray-200 :divide-gray-700">

                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-1.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Ashley
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        10 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-2.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Leo
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        30 menit yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-3.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Justin
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        1 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>
                                        <li class="pb-3 sm:pb-4">
                                            <div class="flex mx-4 sm:mx-0 items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="{{asset('assets/img/team-4.jpg')}}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                        Edward
                                                    </p>
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        4 hari yang lalu
                                                    </span>
                                                    {{-- <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800">QA</span>
                                                    --}}
                                                </div>



                                                <button x-show="mode=='leader'"
                                                    class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg  "
                                                    type="button" data-modal-toggle="modalDetailPelamar"
                                                    data-modal-target="modalDetailPelamar">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                        <path fill="rgb(96, 165, 250)"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                                    </svg>

                                                </button><!-- Modal toggle -->




                                            </div>
                                        </li>




                                    </ul>
                                    {{-- End Pelamar --}}



                                </div>
                                <div x-show="current_page_lowongan == 0"
                                    class="w-full relative sm:p-2 sm:h-full bg-white sm:bg-transparent lg:mt-[30%] text-gray-300 rounded-lg text-center">
                                    Klik salah satu lowongan
                                </div>
                                <div class=" rounded-b-lg border-t sm:hidden top-0 text-center w-full">
                                    <button x-show="main_menu_lowongan == false"
                                        @click="current_page_lowongan=0; main_menu_lowongan=true; active=0;"
                                        class="my-1 p-2 absolute top-0 right-2 text-white bg-gray-500 rounded-lg py-2">
                                        <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;">
                                            <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                            <path
                                                d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>

                <div class="hidden h-[80vh] h-max-[80vh] sm:h-[80vh] sm:h-max-[80vh] md:h-[80vh] md:max-h-[80vh] lg:h-[60vh] lg:max-h-[60vh] p-4 bg-gray-50 rounded-lg :bg-gray-800 overflow-y-auto scrollbar"
                    id="member" role="tabpanel" aria-labelledby="member-tab">


                    <div class=" w-full  ">

                        {{-- <div class="flex justify-between items-center mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 :text-white">Member Team</h5>
                        </div> --}}
                        <div>
                            <div id="accordion-member" data-accordion="collapse"
                                data-active-classes="bg-transparent :bg-gray-900 text-gray-900 :text-white"
                                data-inactive-classes="text-gray-500 :text-gray-400">
                                <div class=" sm:grid sm:grid-cols-2 gap-4 w-full">

                                    <div>
                                        <h2
                                            :id="window.innerWidth <= 640 ? 'accordion-member-heading-0' : 'accordion-member-sm-0'">
                                            <div
                                                class="flex items-center justify-between border-b border-gray-200 :border-gray-700">
                                                <div class="flex items-center">
                                                    <div class="relative">
                                                        <img class="w-12 h-12 rounded-full"
                                                            src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                                        <span
                                                            class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                                                    </div>
                                                    {{-- <img class="w-12 h-12 rounded-full" src="" alt="Neil image">
                                                    --}}
                                                    <div class="ml-2 xl:ml-2">
                                                        <div class="flex">
                                                            <span
                                                                class="text-left text-gray-500 font-medium">John</span>

                                                        </div>
                                                        <p class="text-xs text-gray-500">frontend</p>
                                                    </div>
                                                    {{--
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs xl:ml-2 font-medium inline-flex items-center px-2.5 py-0.5 rounded  :bg-gray-700 :text-gray-400 ">
                                                        <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Aktif 3 menit yang lalu
                                                    </span> --}}



                                                </div>

                                                <div class="flex items-center">
                                                    {{-- <button type="button"
                                                        class="text-white h-full md:h-1/2 bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none text-xs focus:ring-red-300 :focus:ring-red-800 font-medium rounded-lg md:text-sm px-5 p-1 text-center mr-2 mb-2">Resign
                                                        <svg class="inline" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                                            <path
                                                                d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z">
                                                            </path>
                                                            <path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path>
                                                        </svg></button> --}}

                                                    <button data-modal-toggle="modalPengajuan" type="button"
                                                        class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-xs p-1.5 md:text-sm md:px-5 md:py-2.5 text-center inline-flex items-center :hover:bg-[#FF9119]/80 :focus:ring-[#FF9119]/40 mr-2 mb-2">
                                                        <svg class="inline mr-1" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                                            <path
                                                                d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z">
                                                            </path>
                                                            <path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path>
                                                        </svg>
                                                        Pengajuan resign
                                                    </button>
                                                    <!-- Main modal -->
                                                    <div id="modalPengajuan" tabindex="-1" aria-hidden="true"
                                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative w-full bg-white rounded-lg shadow :bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex w-full items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-semibold text-gray-900 :text-white">
                                                                        Pengajuan resign
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                                                        data-modal-hide="modalPengajuan">
                                                                        <svg aria-hidden="true" class="w-5 h-5"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                                clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div
                                                                    class="p-3 h-[400px] max-h-[400px] space-y-6 overflow-y-auto">
                                                                    <div
                                                                        class="flex w-full flex-col mx-auto space-y-2 justify-center">
                                                                        <div class="w-1/3 mx-auto">
                                                                            <img class="w-20 h-20 mx-auto rounded-full"
                                                                                src="{{asset('assets/img/team-3.jpg')}}"
                                                                                alt="Rounded avatar">
                                                                        </div>
                                                                        <div class="flex">
                                                                            <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                                                id="description_team">Lorem ipsum, dolor
                                                                                sit amet consectetur adipisicing elit.
                                                                                Qui aliquam consequatur repudiandae,
                                                                                facilis dignissimos illo quod? Soluta
                                                                                nobis ipsa illum exercitationem numquam
                                                                                ipsum. Aut voluptatum necessitatibus
                                                                                pariatur debitis porro aliquid vel,
                                                                                obcaecati est placeat adipisci iure vero
                                                                                deserunt soluta ratione facere similique
                                                                                quod. Hic ea sint aperiam natus dolore
                                                                                sed?</p>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="relative flex flex-col sm:flex sm:flex-row overflow-x-auto">

                                                                        <table
                                                                            class="w-full text-sm self-start text-left text-gray-500 :text-gray-400">

                                                                            <tbody>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Nama
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        John Doe
                                                                                    </td>

                                                                                </tr>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Email
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        johndoe@example.com
                                                                                    </td>

                                                                                </tr>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Nomor Hp
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        +1 (555) 123-4567
                                                                                    </td>

                                                                                </tr>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Alamat
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        123 Main Street, Anytown, USA
                                                                                    </td>

                                                                                </tr>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Linkedin
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        https://www.linkedin.com/in/john-doe
                                                                                    </td>

                                                                                </tr>
                                                                                <tr
                                                                                    class=" border-b :bg-gray-800 :border-gray-700">
                                                                                    <th scope="row"
                                                                                        class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                                                        Website
                                                                                    </th>

                                                                                    <td class="text-center py-4">
                                                                                        :
                                                                                    </td>

                                                                                    <td class=" py-4">
                                                                                        www.john-doe.com
                                                                                    </td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>

                                                                        <div class="w-full bg-white rounded-lg p-2">
                                                                            <canvas id="pelamar_statistik"
                                                                                class="w-full h-full min-h-[300px] max-h-[300px]"
                                                                                width="100%" height="100%"></canvas>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal footer -->
                                                                <div
                                                                    class="flex justify-center items-center p-6 space-x-2 border-t border-gray-200 rounded-b :border-gray-600">
                                                                    <button onclick="applyResign()" type="button"
                                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Terima</button>
                                                                    <button onclick="rejectResign()" type="button"
                                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">Tolak</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-member-body-0"
                                                        aria-expanded="false" aria-controls="accordion-member-body-0">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>
                                            </div>

                                        </h2>



                                    </div>






                                    <div>
                                        <h2 id="accordion-member-heading-1">
                                            <div
                                                class="flex items-center justify-between border-b border-gray-200 :border-gray-700">
                                                <div class="flex items-center">

                                                    <div class="relative">
                                                        <img class="w-12 h-12 rounded-full"
                                                            src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                                        <span
                                                            class="-bottom-2  absolute px-1 w-full h-4 text-white text-[8px] bg-gray-400 border-2 border-white :border-gray-800 rounded-full text-center">1
                                                            jam</span>
                                                    </div>

                                                    <div class="ml-2 xl:ml-2">
                                                        <div class="flex">
                                                            <span
                                                                class="text-left text-gray-500 font-medium">Albert</span>

                                                        </div>
                                                        <p class="text-xs text-gray-500">Backend</p>
                                                    </div>




                                                </div>

                                                <div class="flex items-center">


                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-member-body-1"
                                                        aria-expanded="false" aria-controls="accordion-member-body-1">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>
                                            </div>

                                        </h2>

                                    </div>
                                    <div>
                                        <h2 id="accordion-member-heading-1">
                                            <div
                                                class="flex items-center justify-between border-b border-gray-200 :border-gray-700">
                                                <div class="flex items-center">

                                                    <div class="relative">
                                                        <img class="w-12 h-12 rounded-full"
                                                            src="{{asset('assets/img/team-4.jpg')}}" alt="">
                                                        <span
                                                            class="-bottom-2  absolute px-1 w-full h-4 text-white text-[8px] bg-gray-400 border-2 border-white :border-gray-800 rounded-full text-center">1
                                                            hari</span>
                                                    </div>

                                                    <div class="ml-2 xl:ml-2">
                                                        <div class="flex">
                                                            <span class="text-left text-gray-500 font-medium">Leo</span>

                                                        </div>
                                                        <p class="text-xs text-gray-500">Backend</p>
                                                    </div>




                                                </div>

                                                <div class="flex items-center">


                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-member-body-1"
                                                        aria-expanded="false" aria-controls="accordion-member-body-1">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>
                                            </div>

                                        </h2>

                                    </div>
                                    <div>
                                        <h2 id="accordion-member-heading-1">
                                            <div
                                                class="flex items-center justify-between border-b border-gray-200 :border-gray-700">
                                                <div class="flex items-center">

                                                    <div class="relative">
                                                        <img class="w-12 h-12 rounded-full"
                                                            src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                                        <span
                                                            class="-bottom-2  absolute px-1 w-full h-4 text-white text-[8px] bg-gray-400 border-2 border-white :border-gray-800 rounded-full text-center">3
                                                            menit</span>
                                                    </div>

                                                    <div class="ml-2 xl:ml-2">
                                                        <div class="flex">
                                                            <span
                                                                class="text-left text-gray-500 font-medium">Ashley</span>

                                                        </div>
                                                        <p class="text-xs text-gray-500">UI/UX</p>
                                                    </div>




                                                </div>

                                                <div class="flex items-center">


                                                    <button type="button"
                                                        class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                        data-accordion-target="#accordion-member-body-1"
                                                        aria-expanded="false" aria-controls="accordion-member-body-1">


                                                        <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                    </button>
                                                </div>
                                            </div>

                                        </h2>

                                    </div>


                                </div>







                            </div>
                        </div>

                        <div id="accordion-member-body-2" class="hidden" aria-labelledby="accordion-member-2">
                            <div class="py-5 font-light border-b border-gray-200 :border-gray-700">

                                <div class="relative flex flex-col sm:flex sm:flex-row overflow-x-auto">
                                    <table class="w-full text-sm self-start text-left text-gray-500 :text-gray-400">

                                        <tbody>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nama
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    Albert
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Email
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    albert@example.com
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nomor Hp
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    +1 (555) 123-4567
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Alamat
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    123 Main Street, Anytown, USA
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Linkedin
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    https://www.linkedin.com/in/albert
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Website
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    www.albert.com
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="w-full bg-white rounded-lg p-2">
                                        <canvas id="albert2" class="w-full h-full min-h-[300px] max-h-[300px]"
                                            width="100%" height="100%"></canvas>
                                        {{-- <h1 class="text-center mb-2">Tugas</h1>

                                        <div class="flex border-b justify-between">
                                            <h1>Slicing Design</h1>
                                            <div>
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="accordion-member-body-1" class="hidden" aria-labelledby="accordion-member-0">
                            <div class="py-5 font-light border-b border-gray-200 :border-gray-700">

                                <div class="relative flex flex-col sm:flex sm:flex-row overflow-x-auto">
                                    <table class="w-full text-sm self-start text-left text-gray-500 :text-gray-400">

                                        <tbody>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nama
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    Albert
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Email
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    albert@example.com
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nomor Hp
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    +1 (555) 123-4567
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Alamat
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    123 Main Street, Anytown, USA
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Linkedin
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    https://www.linkedin.com/in/albert
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Website
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    www.albert.com
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="w-full bg-white rounded-lg p-2">
                                        <canvas id="albert" class="w-full h-full min-h-[300px] max-h-[300px]"
                                            width="100%" height="100%"></canvas>
                                        {{-- <h1 class="text-center mb-2">Tugas</h1>

                                        <div class="flex border-b justify-between">
                                            <h1>Slicing Design</h1>
                                            <div>
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="accordion-member-body-0" class="hidden" aria-labelledby="accordion-member-heading-1">
                            <div class="py-5 font-light border-b border-gray-200 :border-gray-700">

                                <div class="relative flex flex-col sm:flex sm:flex-row overflow-x-auto">
                                    <table class="w-full text-sm self-start text-left text-gray-500 :text-gray-400">

                                        <tbody>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nama
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    John Doe
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Email
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    johndoe@example.com
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Nomor Hp
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    +1 (555) 123-4567
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Alamat
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    123 Main Street, Anytown, USA
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Linkedin
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    https://www.linkedin.com/in/john-doe
                                                </td>

                                            </tr>
                                            <tr class=" border-b :bg-gray-800 :border-gray-700">
                                                <th scope="row"
                                                    class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                                    Website
                                                </th>

                                                <td class="text-center py-4">
                                                    :
                                                </td>

                                                <td class=" py-4">
                                                    www.john-doe.com
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="w-full bg-white rounded-lg p-2">
                                        <canvas id="acquisitions" class="w-full h-full min-h-[300px] max-h-[300px]"
                                            width="100%" height="100%"></canvas>
                                        {{-- <h1 class="text-center mb-2">Tugas</h1>

                                        <div class="flex border-b justify-between">
                                            <h1>Slicing Design</h1>
                                            <div>
                                                <span
                                                    class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                    <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    3 hari lagi
                                                </span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <div x-data="{ current_page: 0, main_menu : true, screenWidth: window.innerWidth, active:0 }"
                    x-on:resize.window="window.innerWidth <= 640 && current_page != 0 ? main_menu = false : main_menu = true"
                    class="hidden h-[80vh] h-max-[80vh] sm:h-[80vh] sm:h-max-[80vh] md:h-[60vh] md:max-h-[60vh] lg:max-h-[60vh] p-4 bg-gray-50 rounded-lg w-full  :bg-gray-800 scrollbar overflow-y-auto"
                    id="projek" role="tabpanel" aria-labelledby="projek-tab">

                    <div
                        class="flex flex-col space-y-2 sm:flex-row justify-between items-center h-[50px] gap-x-2 mb-12 sm:mb-4 ">
                        {{-- <button onclick="fetchTask()"
                            class="relative inline-flex items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                            type="button" data-modal-toggle="modalTask">

                        </button> --}}

                        <button type="button"
                            class="mr-auto text-white h-full bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs p-2 shadow-md  md:text-sm sm:px-5 sm:py-2.5 text-center inline-flex items-center "
                            data-modal-toggle="modalProjek">
                            <svg class="mr-1 inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="fill:rgb(255, 255, 255);transform: ;msFilter:;">
                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                <path
                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                </path>
                            </svg>
                            Tambah
                        </button>

                        <div class="w-full sm:w-1/2 h-[100%] ">

                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative h-full">
                                <button
                                    class=" absolute inset-y-0 right-0 bg-gray-200 rounded-r-lg flex items-center p-2 ">
                                    <svg class="w-5 h-5 text-gray-500 :text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <input type="text" id="table-search-users"
                                    class="block p-2 pl-10 text-sm text-gray-900 h-full shadow-md border-none rounded-lg w-full bg-white "
                                    placeholder="Cari projek" data-drawer-target="drawer_projek"
                                    data-drawer-show="drawer_projek" data-drawer-placement="right"
                                    aria-controls="drawer_projek">
                                <!-- drawer component -->
                                <div id="drawer_projek"
                                    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 :bg-gray-800"
                                    tabindex="-1" aria-labelledby="drawer-right-label">
                                    <h5 id="drawer-right-label"
                                        class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 :text-gray-400">
                                        <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>Cari Projek</h5>
                                    <button type="button" data-drawer-hide="drawer_projek" aria-controls="drawer_projek"
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
                                                <label for="first_name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kata
                                                    Kunci</label>
                                                <input type="text" id="first_name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                    placeholder="Ketikan kata kunci yang diinginkan" required>
                                            </div>
                                            <div class="my-4">
                                                <label for="countries"
                                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Urutkan</label>
                                                <select id="countries"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                                                    <option selected>Paling relevan</option>
                                                    <option value="US">Terbaru</option>
                                                    <option value="CA">Terlama</option>
                                                </select>

                                            </div>


                                        </div>
                                        <button type="submit"
                                            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Cari</button>
                                    </form>
                                </div>
                            </div>
                        </div>




                        <div id="modalProjek" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                    <button id="close-btn-task" type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                        data-modal-toggle="modalProjek">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Tambah Projek
                                        </h3>

                                        <div class="mb-3">
                                            <label for="task_title"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Judul</label>
                                            <input type="text" name="task_title" id="task_title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                placeholder="Ecommerce.." required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="task_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-400">Deskripsi</label>
                                            <textarea id="task_description" name="task_description" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                placeholder="Projek ecommerce adalah.."></textarea>
                                        </div>

                                        <div>
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Pilih
                                                    Member</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true'); document.getElementById('members').innerHTML = ''"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalAddMember">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div id="modalAddMember" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50  md:inset-0 h-modal md:h-full md:w-1/3 md:top-0">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->



                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-member"
                                                            onclick="document.getElementById('close-btn-task').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalAddMember">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 :text-white">
                                                                Tambah Member</h3>

                                                            <div>
                                                                <input oninput="searchMember()" type="search"
                                                                    id="inputMember"
                                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                                    placeholder="Search Member Name..." required>
                                                            </div>

                                                            <div id="members"
                                                                class="py-3 my-3 hidden rounded-lg bg-white">

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div id='member-task'>
                                            <p class="text-sm p-2.5  text-gray-500 text-center">Member belum ditambah
                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Upload multiple files</label>
                                            <input id="input-files" name="files[]"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                id="multiple_files" type="file" multiple> --}}
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Files</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true')"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalFile">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>


                                            <div id="modalFile" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50 w-full md:top-0 md:w-1/3 md:inset-0 h-modal md:h-full ">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-file"
                                                            onclick="document.getElementById('close-btn-task').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalFile">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">

                                                            <input type="hidden" name="task_id">
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                                for="multiple_files">Upload multiple files</label>
                                                            <input id="input-files" name="files[]"
                                                                class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                                id="multiple_files" type="file" multiple>
                                                            <button type="button" onclick="addFile()"
                                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Add</button>


                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div id='file-task' class="mb-3">
                                            <p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Jangka waktu</label>

                                            <div
                                                class="flex max-[600px]:flex-col space-y-3 md:space-y-0 md:space-x-3 items-center">
                                                <div class="flex w-full">

                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        mulai
                                                    </span>

                                                    <input name="task_start" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu mulai..">
                                                </div>
                                                <div class="flex w-full">
                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        selesai
                                                    </span>
                                                    <input name="task_end" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu selesai..">
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" onclick="addTask()"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Tambah</button>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modalEditProjek" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                    <button id="close-btn-edit-task" type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                        data-modal-toggle="modalEditProjek" onclick="closeEditProjek()">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Tambah Projek
                                        </h3>

                                        <div class="mb-3">
                                            <label for="task_title"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Judul</label>
                                            <input type="text" name="task_title" id="task_title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                placeholder="Ecommerce.." value="Ecommerce" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="task_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-400">Deskripsi</label>
                                            <textarea id="task_description" name="task_description" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                placeholder="Projek ecommerce adalah..">Platform Ecommerce yang menjual berbagai produk mulai dari fashion, kosmetik, hingga peralatan rumah tangga</textarea>
                                        </div>

                                        <div>
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Pilih
                                                    Member</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-task').setAttribute('disabled', 'true'); document.getElementById('members').innerHTML = ''"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalEditMember">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div id="modalEditMember" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50 md:w-1/3 md:top-0 md:inset-0 h-modal md:h-full ">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-edit-member"
                                                            onclick="document.getElementById('close-btn-edit-task').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalEditMember">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 :text-white">
                                                                Add Member</h3>
                                                            <input type="hidden" name="task_id">
                                                            <div>
                                                                <input oninput="searchMember('edit')" type="search"
                                                                    id="inputEditMember"
                                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                                    placeholder="Search Member Name..." required>
                                                            </div>

                                                            <div id="members-edit"
                                                                class="py-3 my-3 hidden rounded-lg bg-white">

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id='member-edit-task'>
                                            <p class="text-sm p-2.5  text-gray-500 text-center">Member belum ditambah
                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Upload multiple files</label>
                                            <input id="input-files" name="files[]"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                id="multiple_files" type="file" multiple> --}}
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Files</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-edit-task').setAttribute('disabled', 'true')"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalEditFile">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>


                                            <div id="modalEditFile" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50 md:w-1/3 md:top-0 md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-edit-file"
                                                            onclick="document.getElementById('close-btn-edit-task').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalEditFile">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">

                                                            <input type="hidden" name="task_id">
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                                for="multiple_files">Upload multiple files</label>
                                                            <input id="input-edit-files" name="files_edit[]"
                                                                class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                                id="multiple_files" type="file" multiple>
                                                            <button type="button" onclick="addFile('edit')"
                                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Add</button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id='file-edit-task' class="mb-3">
                                            <p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Jangka waktu</label>

                                            <div
                                                class="flex max-[600px]:flex-col space-y-3 md:space-y-0 md:space-x-3 items-center">
                                                <div class="flex w-full">

                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        mulai
                                                    </span>

                                                    <input name="task_start" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu mulai..">
                                                </div>
                                                <div class="flex w-full">
                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        selesai
                                                    </span>
                                                    <input name="task_end" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu selesai..">
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" onclick="addTask()"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Tambah</button>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modalTugas" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[51] w-full md:inset-0 h-modal md:h-full ">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                    <button id="close-btn-tugas" type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                        data-modal-toggle="modalTugas">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Tambah Tugas</h3>

                                        <div class="mb-3">
                                            <label for="task_title"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Judul</label>
                                            <input type="text" name="task_title" id="task_title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                placeholder="Slicing landing page.." required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="task_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-400">Deskripsi</label>
                                            <textarea id="task_description" name="task_description" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                placeholder="Slicing section home, category.."></textarea>
                                        </div>

                                        <div>
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Pilih
                                                    Member</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-tugas').setAttribute('disabled', 'true'); document.getElementById('members-tugas').innerHTML = ''"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalTugasMember">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div id="modalTugasMember" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50  md:inset-0 h-modal md:h-full md:w-1/3 md:top-0">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->



                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-tugas-member"
                                                            onclick="document.getElementById('close-btn-tugas').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalTugasMember">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 :text-white">
                                                                Tambah Member</h3>

                                                            <div>
                                                                <input oninput="searchMember('tugas')" type="search"
                                                                    id="inputTugasMember"
                                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                                    placeholder="Search Member Name..." required>
                                                            </div>

                                                            <div id="members-tugas"
                                                                class="py-3 my-3 hidden rounded-lg bg-white">

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div id='member-tugas'>
                                            <p class="text-sm p-2.5  text-gray-500 text-center">Member belum ditambah
                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Upload multiple files</label>
                                            <input id="input-files" name="files[]"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                id="multiple_files" type="file" multiple> --}}
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Files</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-tugas').setAttribute('disabled', 'true')"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalTugasFile">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>


                                            <div id="modalTugasFile" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50 w-full md:top-0 md:w-1/3 md:inset-0 h-modal md:h-full ">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-tugas-file"
                                                            onclick="document.getElementById('close-btn-tugas').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalTugasFile">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">

                                                            <input type="hidden" name="task_id">
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                                for="multiple_files">Upload multiple files</label>
                                                            <input id="input-tugas-files" name="files[]"
                                                                class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                                id="multiple_files" type="file" multiple>
                                                            <button type="button" onclick="addFile('tugas')"
                                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Add</button>


                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div id='file-tugas' class="mb-3">
                                            <p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Jangka waktu</label>

                                            <div
                                                class="flex max-[600px]:flex-col space-y-3 md:space-y-0 md:space-x-3 items-center">
                                                <div class="flex w-full">

                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        mulai
                                                    </span>

                                                    <input name="task_start" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu mulai..">
                                                </div>
                                                <div class="flex w-full">
                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        selesai
                                                    </span>
                                                    <input name="task_end" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu selesai..">
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" onclick="addTask()"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Tambah</button>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modalEditTugas" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[51] w-full md:inset-0 h-modal md:h-full ">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                    <button id="close-btn-edit-tugas" type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                        data-modal-toggle="modalEditTugas">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Edit Tugas</h3>

                                        <div class="mb-3">
                                            <label for="task_title"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-300">Judul</label>
                                            <input type="text" name="task_title" id="task_title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white"
                                                placeholder="Slicing landing page.." value="Slicing Landing Page"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="task_description"
                                                class="block mb-2 text-sm font-medium text-gray-900 :text-gray-400">Deskripsi</label>
                                            <textarea id="task_description" name="task_description" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                placeholder="Slicing section home, category..">Slicing section home, category, feature, Q&A, dan Footer</textarea>
                                        </div>

                                        <div>
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Pilih
                                                    Member</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-edit-tugas').setAttribute('disabled', 'true'); document.getElementById('members-edit-tugas').innerHTML = ''"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalEditTugasMember">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div id="modalEditTugasMember" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50  md:inset-0 h-modal md:h-full md:w-1/3 md:top-0">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->



                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-edit-tugas-member"
                                                            onclick="document.getElementById('close-btn-edit-tugas').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalEditTugasMember">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 :text-white">
                                                                Tambah Member</h3>

                                                            <div>
                                                                <input oninput="searchMember('edit-tugas')"
                                                                    type="search" id="inputEditTugasMember"
                                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                                    placeholder="Search Member Name..." required>
                                                            </div>

                                                            <div id="members-edit-tugas"
                                                                class="py-3 my-3 hidden rounded-lg bg-white">

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div id='member-edit-tugas'>
                                            <p class="text-sm p-2.5  text-gray-500 text-center">Member belum ditambah
                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Upload multiple files</label>
                                            <input id="input-files" name="files[]"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                id="multiple_files" type="file" multiple> --}}
                                            <div class="flex gap-x-2">
                                                <label for="category"
                                                    class="block mb-2  text-sm font-medium text-gray-900 :text-gray-400">Files</label>

                                                <button
                                                    onclick="document.getElementById('close-btn-edit-tugas').setAttribute('disabled', 'true')"
                                                    class="relative inline-flex -mt-2 items-center justify-center pr-2 overflow-hidden text-sm font-medium rounded-lg "
                                                    type="button" data-modal-toggle="modalEditTugasFile">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24"
                                                        style="fill:rgb(78, 255, 78);transform: ;msFilter:;">
                                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>


                                            <div id="modalEditTugasFile" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 m-auto z-50 w-full md:top-0 md:w-1/3 md:inset-0 h-modal md:h-full ">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-slate-100 top-0 rounded-lg shadow :bg-gray-700">
                                                        <button id="btn-close-tugas-edit-file"
                                                            onclick="document.getElementById('close-btn-edit-tugas').removeAttribute('disabled');"
                                                            type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                                                            data-modal-toggle="modalEditTugasFile">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-6 lg:px-8">

                                                            <input type="hidden" name="task_id">
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                                for="multiple_files">Upload multiple files</label>
                                                            <input id="input-tugas-edit-files" name="files[]"
                                                                class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400"
                                                                id="multiple_files" type="file" multiple>
                                                            <button type="button" onclick="addFile('edit-tugas')"
                                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Add</button>


                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div id='file-edit-tugas' class="mb-3">
                                            <p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan
                                            </p>
                                        </div>

                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 :text-white"
                                                for="multiple_files">Jangka waktu</label>

                                            <div
                                                class="flex max-[600px]:flex-col space-y-3 md:space-y-0 md:space-x-3 items-center">
                                                <div class="flex w-full">

                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        mulai
                                                    </span>

                                                    <input name="task_start" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu mulai..">
                                                </div>
                                                <div class="flex w-full">
                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md :bg-gray-600 :text-gray-400 :border-gray-600">
                                                        selesai
                                                    </span>
                                                    <input name="task_end" type="datetime-local"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                        placeholder="waktu selesai..">
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" onclick="addTask()"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Tambah</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="card-projek"
                        class="h-[40vh]  py-2 sm:h-[40vh] sm:h-max-[40vh] md:h-[40vh] md:max-h-[40vh] xl:max-h-[40vh] sm:overflow-y-auto sm:scrollbar">
                        {{-- <div id="accordion-projek" data-accordion="collapse"
                            data-active-classes="bg-transparent :bg-gray-900 text-gray-900 :text-white"
                            data-inactive-classes="text-gray-500 :text-gray-400">
                            <ul>
                                <li class="bg-white rounded-md shadow-md px-2 mb-3 cursor-pointer ">

                                    <h2 id="accordion-projek-heading-0">
                                        <div class="flex items-center justify-between ">

                                            <div @click="current_page=0; main_menu=true"
                                                class="flex sm:w-[70%] flex-col  items-center w-full py-3">

                                                <div class="mr-auto  flex items-center">
                                                    <span class="text-left text-gray-500 font-medium">Frontend</span>

                                                </div>

                                                <div class="mr-auto">
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
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



                                            <div class="flex items-center">
                                                <button type="button" data-modal-target="modalDetailProjek"
                                                    data-modal-toggle="modalDetailProjek"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 h-1/2 mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">detail</button>
                                                <button type="button"
                                                    class="flex items-center py-5 font-medium text-left text-gray-500  :text-gray-400"
                                                    data-accordion-target="#accordion-projek-body-0"
                                                    aria-expanded="false" aria-controls="accordion-projek-body-0">


                                                    <svg data-accordion-icon class="w-6 h-6 shrink-0"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>

                                                </button>
                                            </div>

                                        </div>

                                    </h2>
                                    <div id="accordion-projek-body-0" class="hidden"
                                        aria-labelledby="accordion-projek-heading-0">
                                        <div class="py-5 font-light border-t border-gray-200 :border-gray-700">
                                            <p class="mb-2 text-gray-500 :text-gray-400">Flowbite is first
                                                conceptualized and designed using the Figma software so everything you
                                                see in the library has a design equivalent in our Figma file.</p>
                                            <p class="text-gray-500 :text-gray-400">Check out the <a
                                                    href="https://flowbite.com/figma/"
                                                    class="text-blue-600 :text-blue-500 hover:underline">Figma design
                                                    system</a> based on the utility classes from Tailwind CSS and
                                                components from Flowbite.</p>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        </div> --}}

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-4">
                            <div
                                class="w-full h-[220px] max-h-[220px] bg-white p-3 rounded-xl border-l-4 shadow-md border-blue-500">
                                <div class="flex items-center justify-between mb-2 relative">
                                    <h1 class="text-center  text-lg font-semibold">Ecommerce <span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                            <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            30 hari lagi
                                        </span></h1>

                                    <div>
                                        <button id="dropdownMenuIconHorizontalButton"
                                            data-dropdown-toggle="dropdownDotsHorizontal"
                                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none :text-white focus:ring-gray-50 :bg-gray-800 :hover:bg-gray-700 :focus:ring-gray-600"
                                            type="button">
                                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                </path>
                                            </svg>
                                        </button>

                                        <!-- Dropdown menu -->
                                        <div id="dropdownDotsHorizontal"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow :bg-gray-700 :divide-gray-600">
                                            <button onclick="editProjek()"
                                                class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                data-modal-toggle="modalEditProjek" data-modal-target="modalEditProjek"
                                                type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;">
                                                    <path
                                                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                    </path>
                                                    <path
                                                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button
                                                class="relative inline-flex items-center justify-center   overflow-hidden text-sm font-medium rounded-lg"
                                                onclick="swall()" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex mb-2">
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-red-900 :text-red-300">UI/UX</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300">Frontend</span>
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-yellow-900 :text-yellow-300">Backend</span>
                                </div>
                                <p class="text-justify text-sm font-poppins mb-2 text-[#7D7777] :text-gray-400">Platform
                                    Ecommerce yang menjual berbagai produk mulai dari fashion, kosmetik, hingga
                                    peralatan rumah tangga</p>
                                <div class="flex justify-between">
                                    <div class="flex -space-x-4">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 :border-gray-800"
                                            href="#">+99</a>
                                    </div>
                                    <button type="button" data-modal-target="modalDetailProjek"
                                        data-modal-toggle="modalDetailProjek"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 h-1/2 mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">detail</button>
                                </div>



                            </div>
                            <div
                                class="w-full h-[220px] max-h-[220px] bg-white p-3 rounded-xl border-l-4 shadow-md border-blue-500">
                                <div class="flex items-center justify-between mb-2 relative">
                                    <h1 class="text-center  text-lg font-semibold">Chatbot <span
                                            class="bg-green-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">


                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1"
                                                viewBox="0 0 20 20" style="fill: currentColor;transform: ;msFilter:;">
                                                <path
                                                    d="m2.394 13.742 4.743 3.62 7.616-8.704-1.506-1.316-6.384 7.296-3.257-2.486zm19.359-5.084-1.506-1.316-6.369 7.279-.753-.602-1.25 1.562 2.247 1.798z">
                                                </path>
                                            </svg>
                                            selesai
                                        </span></h1>

                                    <div>
                                        <button id="dropdownMenuIconHorizontalButton"
                                            data-dropdown-toggle="dropdownDotsHorizontal"
                                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none :text-white focus:ring-gray-50 :bg-gray-800 :hover:bg-gray-700 :focus:ring-gray-600"
                                            type="button">
                                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                </path>
                                            </svg>
                                        </button>

                                        <!-- Dropdown menu -->
                                        <div id="dropdownDotsHorizontal"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow :bg-gray-700 :divide-gray-600">
                                            <button onclick="editProjek()"
                                                class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                data-modal-toggle="modalEditProjek" data-modal-target="modalEditProjek"
                                                type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" style="fill: #577CFF;transform: ;msFilter:;">
                                                    <path
                                                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                    </path>
                                                    <path
                                                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button
                                                class="relative inline-flex items-center justify-center   overflow-hidden text-sm font-medium rounded-lg"
                                                onclick="swall()" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex mb-2">
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-red-900 :text-red-300">UI/UX</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300">Frontend</span>
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-yellow-900 :text-yellow-300">Backend</span>
                                </div>
                                <p class="text-justify text-sm font-poppins mb-2 text-[#7D7777] :text-gray-400">
                                    Membangun sebuah chatbot yang terintegrasi dengan situs web perusahaan untuk
                                    membantu pelanggan.</p>
                                <div class="flex justify-between">
                                    <div class="flex -space-x-4">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                            src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 :border-gray-800"
                                            href="#">+99</a>
                                    </div>
                                    <button type="button" data-modal-target="modalDetailProjek"
                                        data-modal-toggle="modalDetailProjek"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 h-1/2 mr-2 mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">detail</button>
                                </div>



                            </div>


                        </div>
                    </div>



                    <!-- Modal toggle -->


                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-[100] hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full ">
                        <div class="relative w-full h-full max-h-2xl max-w-3xl md:h-auto md:top-10 ">
                            <!-- Modal content -->
                            <div
                                class="relative bg-white max-h-[500px] overflow-y-auto scrollbar rounded-lg shadow :bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                        Kalender
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
                                <div class="p-6 overflow-auto space-y-6">
                                    <div id='calendar' class=""></div>
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


                    <!-- Modal toggle -->
                    {{-- <button @click="current_page=0; main_menu=true" data-modal-target="modalDetailProjek"
                        data-modal-toggle="modalDetailProjek"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
                        type="button">
                        Toggle modal
                    </button> --}}



                    <!-- Main modal -->
                    <div id="modalDetailProjek" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-[1000px] md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-gray-50 rounded-lg shadow :bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">

                                    <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                        Ecommerce
                                    </h3>

                                    <div class="bg-blue-400 rounded-full px-4 pt-0.5 shadow-md">
                                        <button data-modal-toggle="modalFileProjek" data-modal-target="modalFileProjek"
                                            onclick="fileProjek()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                                <path
                                                    d="M19.903 8.586a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.952.952 0 0 0-.051-.259c-.01-.032-.019-.063-.033-.093zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z">
                                                </path>
                                                <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h2v2H8z"></path>
                                            </svg>
                                        </button>

                                        <button data-modal-toggle="modalTugas">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                                <path
                                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button onclick="renderCalendar()" data-modal-toggle="defaultModal">
                                            <svg class="p-0" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                                                <path
                                                    d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                                                </path>
                                                <path
                                                    d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z">
                                                </path>
                                            </svg>
                                        </button>


                                        <div id="modalFileProjek" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 :text-white">
                                                            File Projek
                                                        </h3>
                                                        <button id="close-btn-file-projek-tambah" type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                                            data-modal-hide="modalFileProjek">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-6 max-h-[80vh] overflow-y-auto">
                                                        <input id="filepondInput" type="file" class="filepond"
                                                            name="filepondInput" multiple data-allow-reorder="true"
                                                            data-max-file-size="3MB" data-max-files="3">

                                                        <div id="file-projek-area">

                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5  inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                                        data-modal-hide="modalDetailProjek">
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
                                <div class="space-y-6">
                                    <div class="flex flex-col w-full h-full sm:flex-row xl:flex xl:w-full">
                                        <div x-show="main_menu"
                                            class="order-2 max-h-[80vh] sm:h-[400px] sm:max-h-[400px] sm:w-1/2 sm:order-1 xl:w-1/2 p-2 xl:max-h-full scrollbar  xl:overflow-y-auto">
                                            <div class="w-full mb-2">

                                                <label for="table-search" class="sr-only">Search</label>
                                                <div class="relative h-full">
                                                    <button
                                                        class=" absolute inset-y-0 right-0 bg-gray-200 rounded-r-lg flex items-center p-2 ">
                                                        <svg class="w-5 h-5 text-gray-500 :text-gray-400"
                                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                    <input type="text" id="table-search-users"
                                                        class="block p-2 pl-10 text-sm text-gray-900 h-full shadow-md border-none rounded-lg w-full bg-white "
                                                        placeholder="Cari tugas" data-drawer-target="drawer_tugas"
                                                        data-drawer-show="drawer_tugas" data-drawer-placement="right"
                                                        aria-controls="drawer_tugas">


                                                    <!-- drawer component -->
                                                    <div id="drawer_tugas"
                                                        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 :bg-gray-800"
                                                        tabindex="-1" aria-labelledby="drawer-right-label">
                                                        <h5 id="drawer-right-label"
                                                            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 :text-gray-400">
                                                            <svg class="w-5 h-5 mr-2" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>Cari Tugas</h5>
                                                        <button type="button" data-drawer-hide="drawer_tugas"
                                                            aria-controls="drawer_tugas"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center :hover:bg-gray-600 :hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close menu</span>
                                                        </button>

                                                        <form>
                                                            <div class="">
                                                                <div>
                                                                    <label for="first_name"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kata
                                                                        Kunci</label>
                                                                    <input type="text" id="first_name"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                                                        placeholder="Ketikan kata kunci yang diinginkan"
                                                                        required>
                                                                </div>
                                                                <div class="my-4">
                                                                    <label for="countries"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 :text-white">Urutkan</label>
                                                                    <select id="countries"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                                                                        <option selected>Paling relevan</option>
                                                                        <option value="US">Terbaru</option>
                                                                        <option value="CA">Terlama</option>
                                                                    </select>

                                                                </div>


                                                            </div>
                                                            <button type="submit"
                                                                class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Cari</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li :class="active==1 ? 'border-2 border-blue-500' : ''"
                                                    @click="current_page = 1; window.innerWidth < 768 ? main_menu = false : main_menu = true; active=1"
                                                    class="bg-white cursor-pointer rounded-md shadow-md p-2 mb-3">

                                                    <div class="flex  items-center justify-between">

                                                        <div class="flex flex-col">

                                                            <h1 class="mr-2 mb-2">Menyusun SRS</h1>
                                                            <div class="flex">
                                                                <span
                                                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-red-900 :text-red-300">UI/UX</span>
                                                                <span
                                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-green-900 :text-green-300">Frontend</span>
                                                                <span
                                                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-yellow-900 :text-yellow-300">Backend</span>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <span
                                                                class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                                <svg aria-hidden="true" class="w-3 h-3 mr-1"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                7 hari lagi
                                                            </span>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li :class="active==2 ? 'border-2 border-blue-500' : ''"
                                                    @click="current_page = 2; window.innerWidth < 768 ? main_menu = false : main_menu = true; active=2"
                                                    class="bg-white cursor-pointer rounded-md shadow-md p-2 mb-3">

                                                    <div class="flex items-center justify-between">

                                                        <div class="flex flex-col">

                                                            <h1 class="mr-2 mb-2">Membuat skema database</h1>
                                                            <div class="flex">

                                                                <span
                                                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-yellow-900 :text-yellow-300">Backend</span>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <span
                                                                class="bg-green-300 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                                <svg aria-hidden="true" class="w-3 h-3 mr-1"
                                                                    fill="green" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                selesai
                                                            </span>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li :class="active==3 ? 'border-2 border-blue-500' : ''"
                                                    @click="current_page = 3; window.innerWidth < 768 ? main_menu = false : main_menu = true; active=3"
                                                    class="bg-white cursor-pointer rounded-md shadow-md p-2 mb-3">
                                                    <div class="flex items-center justify-between">

                                                        <div class="flex flex-col">

                                                            <h1 class="mr-2 mb-2">Desain halaman produk</h1>
                                                            <div class="flex">
                                                                <span
                                                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full :bg-red-900 :text-red-300">UI/UX</span>

                                                            </div>
                                                        </div>

                                                        <div>
                                                            <span
                                                                class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 :bg-gray-700 :text-gray-400 ">
                                                                <svg aria-hidden="true" class="w-3 h-3 mr-1"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                3 hari lagi
                                                            </span>
                                                        </div>

                                                    </div>


                                            </ul>



                                        </div>
                                        <div :class="current_page != 0 ? 'bg-white' : 'bg-gray-100'"
                                            class="order-1 sm:order-2 sm:w-1/2 xl:w-1/2 h-full sm:h-[400px] sm:max-h-[400px] flex scrollbar overflow-y-auto max-h-[400px] p-2 rounded-md">
                                            <div x-show="current_page == 1"
                                                class=" w-full relative p-2 h-full  rounded-lg">
                                                <div class="absolute w-full flex bg-red top-0 justify-between">
                                                    <button
                                                        class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="editTugas()" type="button"
                                                        data-modal-target="modalEditTugas"
                                                        data-modal-toggle="modalEditTugas">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: #577CFF;transform: ;msFilter:;">
                                                            <path
                                                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                            </path>
                                                            <path
                                                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <button
                                                        class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="deleteRequirement(1)" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                            <path
                                                                d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                            </path>
                                                            <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <h1 class="text-center mb-2 text-[#313131] text-lg font-semibold pt-2">
                                                    Menyusun SRS</h1>


                                                <div>
                                                    <div class="mb-2">
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">mulai : 26 Februari 2023, 09.00 WIB
                                                        </p>
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">berakhir : 30 Februari 2023, 11.00 WIB
                                                        </p>
                                                    </div>
                                                    <div class="flex xl:mt-4 mb-2 xl:px-2">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">Deskripsi :
                                                        </h1>
                                                    </div>

                                                    <p class="text-sm mb-2 xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                        id="description_team">Memahami kebutuhan bisnis dan pengguna
                                                        untuk sistem Ecommerce. Mengumpulkan dan menganalisis
                                                        persyaratan sistem dari stakeholder yang terkait seperti
                                                        pengguna, pemilik bisnis, dan tim teknis.Menyusun dokumen SRS
                                                        yang jelas dan terperinci untuk memastikan semua persyaratan
                                                        sistem tercakup dengan baik.</p>
                                                </div>


                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">Member :</h1>
                                                    </div>
                                                    <div class="flex mb-5 -space-x-4">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-1.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-2.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-3.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-4.jpg')}}" alt="">
                                                    </div>
                                                </div>

                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">File :</h1>
                                                    </div>
                                                    <div class="flex mb-5 space-x-2">
                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> word.docx</a>

                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> excell.xlsx</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div x-show="current_page == 2"
                                                class=" w-full relative p-2 h-full  rounded-lg">
                                                <div class="absolute w-full flex bg-red top-0 justify-between">
                                                    <button
                                                        class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="editTugas()" type="button"
                                                        data-modal-target="modalEditTugas"
                                                        data-modal-toggle="modalEditTugas">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: #577CFF;transform: ;msFilter:;">
                                                            <path
                                                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                            </path>
                                                            <path
                                                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <button
                                                        class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="deleteRequirement(1)" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                            <path
                                                                d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                            </path>
                                                            <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <h1 class="text-center mb-2 text-[#313131] text-lg font-semibold pt-2">
                                                    Membuat Skema Database</h1>


                                                <div>
                                                    <div class="mb-2">
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">mulai : 26 Februari 2023, 09.00 WIB
                                                        </p>
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">berakhir : 30 Februari 2023, 11.00 WIB
                                                        </p>
                                                    </div>
                                                    <div class="flex xl:mt-4 mb-2 xl:px-2">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">Deskripsi :
                                                        </h1>
                                                    </div>

                                                    <p class="text-sm mb-2 xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                        id="description_team">Merancang struktur database yang sesuai
                                                        dengan kebutuhan sistem Ecommerce dan mempertimbangkan faktor
                                                        seperti performa, skalabilitas, keamanan, dan privasi data.
                                                        Mengimplementasikan skema database dengan benar menggunakan
                                                        bahasa query seperti SQL.</p>
                                                </div>


                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">Member :</h1>
                                                    </div>
                                                    <div class="flex mb-5 -space-x-4">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-1.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-2.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-3.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-4.jpg')}}" alt="">
                                                    </div>
                                                </div>

                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">File :</h1>
                                                    </div>
                                                    <div class="flex mb-5 space-x-2">
                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> word.docx</a>

                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> excell.xlsx</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div x-show="current_page == 3"
                                                class=" w-full relative p-2 h-full  rounded-lg">
                                                <div class="absolute w-full flex bg-red top-0 justify-between">
                                                    <button
                                                        class="relative inline-flex items-center justify-center ml-1 overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="editTugas()" type="button"
                                                        data-modal-target="modalEditTugas"
                                                        data-modal-toggle="modalEditTugas">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: #577CFF;transform: ;msFilter:;">
                                                            <path
                                                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                                            </path>
                                                            <path
                                                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <button
                                                        class="relative inline-flex items-center justify-center -mt-1  overflow-hidden text-sm font-medium rounded-lg"
                                                        onclick="deleteRequirement(1)" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="fill: rgb(255, 50, 50);transform: ;msFilter:;">
                                                            <path
                                                                d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                            </path>
                                                            <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <h1 class="text-center mb-2 text-[#313131] text-lg font-semibold pt-2">
                                                    Design halaman detail produk</h1>
                                                <div>
                                                    <div class="mb-2">
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">mulai : 26 Februari 2023, 09.00 WIB
                                                        </p>
                                                        <p class="text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                            id="description_team">berakhir : 30 Februari 2023, 11.00 WIB
                                                        </p>
                                                    </div>
                                                    <div class="flex xl:mt-4 xl:px-2">
                                                        <h1 class="text-[#313131] mb-2 text-lg font-semibold ">Deskripsi
                                                            :</h1>
                                                    </div>

                                                    <p class="text-sm mb-2 xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify"
                                                        id="description_team">Memecah desain halaman detail produk
                                                        menjadi potongan-potongan (slices) yang dapat diimplementasikan
                                                        dengan HTML, CSS, dan JavaScript. Menyusun struktur HTML untuk
                                                        halaman detail produk, termasuk menambahkan elemen-elemen
                                                        seperti gambar produk, deskripsi, harga, rating, dan tombol
                                                        beli. Menerapkan styling halaman detail produk menggunakan CSS,
                                                        termasuk menentukan ukuran dan posisi elemen, serta mengatur
                                                        tampilan responsif agar dapat tampil dengan baik pada berbagai
                                                        perangkat.</p>
                                                </div>


                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">Member :</h1>
                                                    </div>
                                                    <div class="flex mb-5 -space-x-4">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-1.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-2.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-3.jpg')}}" alt="">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full :border-gray-800"
                                                            src="{{asset('/assets/img/team-4.jpg')}}" alt="">
                                                    </div>
                                                </div>

                                                <div class="xl:px-2">
                                                    <div class="flex xl:mt-4  ">
                                                        <h1 class="text-[#313131] text-lg font-semibold ">File :</h1>
                                                    </div>
                                                    <div class="flex mb-5 space-x-2">
                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> word.docx</a>

                                                        <a href="" download
                                                            class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                                                class="mr-2 w-4 h-4" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg> excell.xlsx</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div x-show="current_page == 0"
                                                class=" text-center text-gray-300 w-full lg:mt-[30%] p-2 h-full rounded-lg">
                                                Klik salah satu tugas
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex justify-center items-center p-6 space-x-2 border-t border-gray-200 rounded-b :border-gray-600">

                                    <button x-show="main_menu == false"
                                        @click="current_page=0; main_menu=true; active=0"
                                        class="text-white bg-red-500 rounded-lg p-3">
                                        Kembali
                                        <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;">
                                            <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                            <path
                                                d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                                            </path>
                                        </svg>
                                    </button>
                                    {{-- <button data-modal-hide="modalProjek" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">I
                                        accept</button>
                                    <button data-modal-hide="defaultModal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 :bg-gray-700 :text-gray-300 :border-gray-500 :hover:text-white :hover:bg-gray-600 :focus:ring-gray-600">Decline</button>
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <ol id="task-list" class="relative border-l border-gray-200 :border-gray-700">


                        <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white :ring-gray-900 :bg-blue-900">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 :text-blue-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div class="flex">

                                <h3
                                    class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 :text-white">
                                    title
                                </h3>

                                <button onclick="fetchTaskData(1)"
                                    class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: #577CFF;transform: ;msFilter:;">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>

                                </button>

                                <button
                                    class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg "
                                    type="button" onclick="deleteTask(1)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgb(248, 36, 36);transform: ;msFilter:;">
                                        <path
                                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z">
                                        </path>
                                    </svg>
                                </button>



                            </div>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 :text-gray-400">Role :
                                backend
                                <span
                                    class="text-white text-sm font-medium px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800 ml-3 -mr-2"
                                    style="background-color: #891982">backend</span>

                            </p>
                            <time
                                class="block mb-2 break-words text-sm font-normal leading-none :text-gray-500 text-green-300">start
                                09.00</time>
                            <time
                                class="block mb-4 break-words text-sm font-normal leading-none :text-gray-500 text-red-300">end
                                11.00</time>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 :text-gray-400">desc</p>
                            <p class="mb-4 break-words text-base font-normal text-gray-500 :text-gray-400">Member : </p>

                            <div class="flex mb-4">

                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                        data-dropdown-placement="bottom-start"
                                        class="w-10 h-10 rounded-full cursor-pointer" src=".." alt="User dropdown">
                                </div>

                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                        data-dropdown-placement="bottom-start"
                                        class="w-10 h-10 rounded-full cursor-pointer" src=".. " alt="User dropdown">
                                </div>



                            </div>
                            <p class="mb-2 break-words text-base font-normal text-gray-500 :text-gray-400">Files : </p>


                            <a href=".." download
                                class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                    class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg> docx.deck</a>




                        </li>
                        <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white :ring-gray-900 :bg-blue-900">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-600 :text-blue-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div class="flex">

                                <h3
                                    class="flex break-words items-center mb-4 text-lg font-semibold text-gray-900 :text-white">
                                    title
                                </h3>

                                <button onclick="fetchTaskData(1)"
                                    class="relative inline-flex items-center justify-center -mt-4 ml-2 overflow-hidden text-sm font-medium rounded-lg"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: #577CFF;transform: ;msFilter:;">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>

                                </button>

                                <button
                                    class="relative inline-flex items-center justify-center -mt-4 overflow-hidden text-sm font-medium rounded-lg "
                                    type="button" onclick="deleteTask(1)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgb(248, 36, 36);transform: ;msFilter:;">
                                        <path
                                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z">
                                        </path>
                                    </svg>
                                </button>



                            </div>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 :text-gray-400">Role :
                                backend
                                <span
                                    class="text-white text-sm font-medium px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800 ml-3 -mr-2"
                                    style="background-color: #891982">backend</span>

                            </p>
                            <time
                                class="block mb-2 break-words text-sm font-normal leading-none :text-gray-500 text-green-300">start
                                09.00</time>
                            <time
                                class="block mb-4 break-words text-sm font-normal leading-none :text-gray-500 text-red-300">end
                                11.00</time>
                            <p class="mb-4  break-words text-base font-normal text-gray-500 :text-gray-400">desc</p>
                            <p class="mb-4 break-words text-base font-normal text-gray-500 :text-gray-400">Member : </p>

                            <div class="flex mb-4">

                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                        data-dropdown-placement="bottom-start"
                                        class="w-10 h-10 rounded-full cursor-pointer" src=".." alt="User dropdown">
                                </div>

                                <div>
                                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                        data-dropdown-placement="bottom-start"
                                        class="w-10 h-10 rounded-full cursor-pointer" src=".. " alt="User dropdown">
                                </div>



                            </div>
                            <p class="mb-2 break-words text-base font-normal text-gray-500 :text-gray-400">Files : </p>


                            <a href=".." download
                                class="inline-flex items-center mb-1 py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"><svg
                                    class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg> docx.deck</a>




                        </li>



                        <p class="text-sm text-center pb-4">No Task Added</p>



                    </ol> --}}

                </div>
            </div>










        </div>






        <div class="relative hidden xl:w-[30%] xl:block ml-6 bg-gray-100  rounded-2xl xl:mt-5 xl:shadow-2xl">

            <div class="absolute top-0 w-full  bg-white border-b rounded-t-2xl">
                <h1 class="text-center text-sm mt-2 mb-3 font-poppins font-semibold">Chat Tim</h1>
                <div class="flex mb-3 justify-center items-center">
                    <div class="relative">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                        <span
                            class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                        <span
                            class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                        <span
                            class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                    </div>
                    <div class="relative">
                        <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                        <span
                            class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                    </div>
                    <a class="flex items-center justify-center w-9 h-9 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 :border-gray-800"
                        href="#">+10</a>
                </div>
            </div>

            <div class="absolute bottom-0 w-full  bg-white border-t rounded-b-2xl">

                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg ">
                        <button type="button"
                            class="text-white  font-medium rounded-lg text-sm  text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgb(194, 194, 194);transform: ;msFilter:;">
                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                <path
                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                </path>
                            </svg></button>
                        <div id="tooltip-click" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            <div class="flex">
                                <button type="button"
                                    class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                                <button type="button"
                                    class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Add emoji</span>
                                </button>
                            </div>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <textarea id="chat" rows="1"
                            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-800 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <button type="submit"
                            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 :text-blue-500 :hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>

            </div>

            {{-- <form class="" action="{{url('/message')}}" method="POST">
                @csrf
                <input type="hidden" id="teamID" name="slug" value="1">
                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center py-2 px-3 bg-gray-50 rounded-t-lg :bg-gray-700">
                    <button type="button"
                        class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                    <button type="button"
                        class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Add emoji</span>
                    </button>
                    <textarea id="chat" name="message" rows="1"
                        class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-800 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                        placeholder="Your message..."></textarea>
                    <button type="button" onclick="sendMessage()"
                        class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 :text-blue-500 :hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                            </path>
                        </svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>


            </form>
            <div id="chat-group" class="bg-slate-200 mr-6 rounded-xl h-[300px] overflow-y-auto scroll-smooth">

                <div id='chat-field' class="">



                    <div class="flex mt-3 ml-3 w-[90%]">
                        <img class="w-8 h-8 rounded-full shadow-lg" src="..">
                        <div class="ml-3 text-sm font-normal w-5/6">
                            <span class="mb-1 text-sm font-semibold text-gray-900 :text-white">deva</span>
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
            </div> --}}

        </div>


        <div id="modalApply" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-800 :hover:text-white"
                        data-modal-toggle="modalApply">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">

                        <h3 class="mb-4 text-xl font-medium text-gray-900 :text-white">Join Team</h3>
                        <form class="space-y-3" action="{{url("/team-detail/910928/apply")}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="hidden" id="teamID" name="slug" value="1">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Your
                                    message</label>
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                    name="message" placeholder="Write your thoughts here..."></textarea>

                            </div>
                            <div>
                                <label for="role"
                                    class="block mb-2 text-sm font-medium text-gray-900 :text-gray-400">Choose
                                    Roles</label>
                                <select id="role" name="role"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500">
                                    {{-- <option selected>Choose Roles</option> --}}


                                    <option value="1">backend</option>


                                </select>
                            </div>

                            <div>

                                <div class="max-w-xl">
                                    <label
                                        class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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



                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Apply</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main modal -->
        <div id="modalDetailPelamar" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative w-full bg-white rounded-lg shadow :bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex w-full items-start justify-between p-4 border-b rounded-t :border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 :text-white">
                            Pelamar
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                            data-modal-hide="modalDetailPelamar">
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
                    <div class="p-3 h-[400px] max-h-[400px] space-y-6 overflow-y-auto">
                        <div class="flex w-full flex-col mx-auto space-y-2 justify-center">
                            <div class="w-1/3 mx-auto">
                                <img class="w-20 h-20 mx-auto rounded-full" src="{{asset('assets/img/team-4.jpg')}}"
                                    alt="Rounded avatar">
                            </div>
                            <div class="w-full text-center">

                                <a href=""
                                    class="inline-flex justify-center items-center py-2 px-4 text-sm font-medium text-white bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 active:bg-slate-100 :focus:ring-gray-700"><svg
                                        class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                            clip-rule="evenodd"></path>
                                    </svg> Download CV</a>
                            </div>
                        </div>
                        <div class="relative flex flex-col sm:flex sm:flex-row overflow-x-auto">
                            <table class="w-full text-sm self-start text-left text-gray-500 :text-gray-400">

                                <tbody>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Nama
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            Edward
                                        </td>

                                    </tr>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Email
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            edward@example.com
                                        </td>

                                    </tr>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Nomor Hp
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            +1 (555) 123-4567
                                        </td>

                                    </tr>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Alamat
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            123 Main Street, Anytown, USA
                                        </td>

                                    </tr>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Linkedin
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            https://www.linkedin.com/in/edward
                                        </td>

                                    </tr>
                                    <tr class=" border-b :bg-gray-800 :border-gray-700">
                                        <th scope="row"
                                            class=" py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                            Website
                                        </th>

                                        <td class="text-center py-4">
                                            :
                                        </td>

                                        <td class=" py-4">
                                            www.edward.com
                                        </td>

                                    </tr>

                                </tbody>
                            </table>

                            <div class="w-full bg-white rounded-lg p-2">
                                <canvas id="statistik_pelamar" class="w-full h-full min-h-[300px] max-h-[300px]"
                                    width="100%" height="100%"></canvas>

                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-center items-center p-6 space-x-2 border-t border-gray-200 rounded-b :border-gray-600">
                        <button onclick="apply()" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Terima</button>
                        <button onclick="reject()" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">Tolak</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Chat mobile --}}
        <button data-modal-target="modalChat" data-modal-toggle="modalChat" type="button"
            class="flex fixed z-20 right-6 bottom-24 group md:hidden justify-center items-center w-[52px] h-[52px]  bg-blue-700 rounded-full border border-gray-200 :border-gray-50 shadow-sm :hover:text-white :text-gray-400 hover:bg-blue-600  focus:ring-4 focus:ring-gray-50 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgb(236, 236, 236);transform: ;msFilter:;">
                <circle cx="9.5" cy="9.5" r="1.5"></circle>
                <circle cx="14.5" cy="9.5" r="1.5"></circle>
                <path
                    d="M12 2C6.486 2 2 5.589 2 10c0 2.908 1.897 5.515 5 6.934V22l5.34-4.004C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.671 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z">
                </path>
            </svg>
            <span class="sr-only">Share</span>
        </button>


        <!-- Main modal -->
        <div id="modalChat" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start border-b rounded-t :border-gray-600">
                        <div class="justify-self-center relative w-full">
                            <h1 class="text-center text-sm mt-2 mb-3 font-poppins font-semibold">Chat Tim</h1>
                            <div class="flex mb-3 justify-center items-center">
                                <div class="relative">
                                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                                    <span
                                        class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                                </div>
                                <div class="relative">
                                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                    <span
                                        class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                                </div>
                                <div class="relative">
                                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                    <span
                                        class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                                </div>
                                <div class="relative">
                                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                                    <span
                                        class="top-0 left-5 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white :border-gray-800 rounded-full"></span>
                                </div>
                                <a class="flex items-center justify-center w-9 h-9 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 :border-gray-800"
                                    href="#">+10</a>
                            </div>
                            <button type="button"
                                class="text-gray-400 absolute top-1 right-2 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5  :hover:bg-gray-600 :hover:text-white"
                                data-modal-hide="modalChat">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>

                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 bg-gray-100 h-[50vh] max-h-[50v] overflow-y-auto">
                        {{-- <div class="absolute top-0 w-full  bg-white border-b rounded-t-2xl">

                        </div> --}}

                        {{-- <div class="absolute bottom-0 w-full  bg-white border-t rounded-b-2xl">



                        </div> --}}
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center py-3 justify-center space-x-2 border-t border-gray-200 rounded-b :border-gray-600">
                        <form class="w-full">
                            <label for="chat" class="sr-only">Your message</label>
                            <div class="flex items-center px-3 py-2 rounded-lg ">
                                <button data-tooltip-target="tooltip-click" data-tooltip-trigger="click" type="button"
                                    class="text-white  font-medium rounded-lg text-sm  text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgb(194, 194, 194);transform: ;msFilter:;">
                                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
                                        <path
                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                        </path>
                                    </svg></button>
                                <div id="tooltip-click" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                    <div class="flex">
                                        <button type="button"
                                            class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Upload image</span>
                                        </button>
                                        <button type="button"
                                            class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 :text-gray-400 :hover:text-white :hover:bg-gray-600">
                                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Add emoji</span>
                                        </button>
                                    </div>
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>

                                <textarea id="chat" rows="1"
                                    class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-800 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                    placeholder="Your message..."></textarea>
                                <button type="submit"
                                    class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 :text-blue-500 :hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Send message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>






        {{-- Navbar bottom mobile --}}
        <div
            class="sm:hidden bg-white py-2 rounded-t-md fixed w-full bottom-0 border-b border-gray-200 :border-gray-700">
            <ul class="flex justify-around -mb-px mx-1 text-sm font-medium text-center text-gray-500 :text-gray-400"
                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-1" role="presentation">
                    <button id="profil-m-tab" data-tabs-target="#profil" type="button" role="tab" aria-controls="profil"
                        aria-selected="true" class="">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 :text-gray-500 :group-hover:text-gray-300"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897V12H5.51a15.473 15.473 0 0 1-.544-4.365L12 4.118V12h6.46c-.759 2.74-2.498 5.979-6.46 7.897z">
                            </path>
                        </svg>
                        </path>
                        </svg>
                    </button>

                    <p
                        class=" text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
                        Profil
                    </p>
                </li>
                <li class="mr-1" role="presentation">
                    <button id="lowongan-m-tab" data-tabs-target="#lowongan" type="button" role="tab"
                        aria-controls="lowongan" aria-selected="false">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-auto " fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v4h5v-2h2v2h6v-2h2v2h5V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 11h-2v-2H9v2H7v-2H2v6c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6h-5v2z">
                            </path>
                        </svg>
                        </svg>
                    </button>

                    <p class="text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group"
                        aria-current="page">
                        Lowongan
                    </p>
                </li>
                <li class="mr-1" role="presentation">
                    <button id="member-m-tab" data-tabs-target="#member" type="button" role="tab" aria-controls="member"
                        aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 :text-gray-500 :group-hover:text-gray-300"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M6 22h13a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h1zm6-17.001c1.647 0 3 1.351 3 3C15 9.647 13.647 11 12 11S9 9.647 9 7.999c0-1.649 1.353-3 3-3zM6 17.25c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5V18H6v-.75z">
                            </path>
                        </svg>
                        </svg>
                    </button>

                    <p
                        class=" text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
                        Member
                    </p>
                </li>
                <li class="mr-1" role="presentation">
                    <button id="projek-m-tab" data-tabs-target="#projek" type="button" role="tab" aria-controls="projek"
                        aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 mx-auto text-gray-400 group-hover:text-gray-500 :text-gray-500 :group-hover:text-gray-300"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                            </path>
                        </svg>
                    </button>
                    <p
                        class=" text-xs p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 :hover:text-gray-300 group">
                        Projek
                    </p>
                </li>


            </ul>
        </div>


        {{-- Modal Edit Lowongan --}}
        <div id="modalEditLowongan" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow :bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t :border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 :text-white">
                            Lowongan
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center :hover:bg-gray-600 :hover:text-white"
                            data-modal-hide="modalEditLowongan">
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
                    <div x-data="app()" x-cloak class="p-6 space-y-6">
                        <form>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="">
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                                        Role</label>
                                    <input type="text" id="first_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                        value="Frontend" required>
                                </div>
                                <div class="flex w-full items-center">
                                    <div class="w-full">
                                        <label for="colorSelected"
                                            class="block mb-2 text-sm font-medium text-gray-900 :text-white">Pilih Warna
                                            Role</label>
                                        <input id="colorSelected" type="text" placeholder="Pick a color"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                            readonly x-model="colorSelected">
                                    </div>
                                    <div class="relative ml-3 mt-6">
                                        <button type="button" @click="isOpen = !isOpen"
                                            class="w-10 h-10 rounded-full focus:outline-none focus:shadow-outline inline-flex p-2 shadow"
                                            :style="`background: ${colorSelected}; color: white`">
                                            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="none"
                                                    d="M15.584 10.001L13.998 8.417 5.903 16.512 5.374 18.626 7.488 18.097z" />
                                                <path
                                                    d="M4.03,15.758l-1,4c-0.086,0.341,0.015,0.701,0.263,0.949C3.482,20.896,3.738,21,4,21c0.081,0,0.162-0.01,0.242-0.03l4-1 c0.176-0.044,0.337-0.135,0.465-0.263l8.292-8.292l1.294,1.292l1.414-1.414l-1.294-1.292L21,7.414 c0.378-0.378,0.586-0.88,0.586-1.414S21.378,4.964,21,4.586L19.414,3c-0.756-0.756-2.072-0.756-2.828,0l-2.589,2.589l-1.298-1.296 l-1.414,1.414l1.298,1.296l-8.29,8.29C4.165,15.421,4.074,15.582,4.03,15.758z M5.903,16.512l8.095-8.095l1.586,1.584 l-8.096,8.096l-2.114,0.529L5.903,16.512z" />
                                            </svg>
                                        </button>

                                        <div x-show="isOpen" @click.away="isOpen = false"
                                            x-transition:enter="transition ease-out duration-100 transform"
                                            x-transition:enter-start="opacity-0 scale-95"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75 transform"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-95"
                                            class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg">
                                            <div class="rounded-md bg-white shadow-xs px-4 py-3">
                                                <div class="flex flex-wrap -mx-2">
                                                    <template x-for="(color, index) in colors" :key="index">
                                                        <div class="px-2">
                                                            <template x-if="colorSelected === color">
                                                                <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white"
                                                                    :style="`background: ${color}; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);`">
                                                                </div>
                                                            </template>

                                                            <template x-if="colorSelected != color">
                                                                <div @click="colorSelected = color"
                                                                    @keydown.enter="colorSelected = color"
                                                                    role="checkbox" tabindex="0"
                                                                    :aria-checked="colorSelected"
                                                                    class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                                    :style="`background: ${color};`"></div>
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
                                <label for="lowongan"
                                    class="block mb-2 text-sm font-medium text-gray-900 :text-white">Kualifikasi</label>
                                <input id="lowongan" type="hidden" name="content">
                                <trix-editor class="h-[200px] max-h-[200px] overflow-y-auto" input="lowongan">
                                    <h3 class="text-lg font-semibold mb-2">Kualifikasi:</h3>

                                    <ul
                                        class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                        <li class="mb-1">Memiliki pengalaman minimal 2 tahun sebagai Frontend Developer.
                                        </li>
                                        <li class="mb-1">Menguasai HTML, CSS, JavaScript, dan framework front-end
                                            seperti ReactJS, VueJS, atau AngularJS.</li>
                                        <li class="mb-1">Mampu bekerja dalam tim dan berkomunikasi dengan baik.</li>
                                        <li class="mb-1">Memiliki kemampuan untuk menyelesaikan masalah dan memiliki
                                            kemampuan analitis yang baik.</li>
                                        <li class="mb-1">Memiliki portfolio yang menunjukkan keterampilan dalam
                                            pengembangan tampilan aplikasi web.</li>
                                    </ul>
                                    <h3 class="text-lg font-semibold mb-2">Jobdesk:</h3>
                                    <ul
                                        class="list-disc ml-4 mb-4 text-sm xl:mx-2 leading-7 font-poppins text-[#7D7777] :text-gray-400 text-justify">
                                        <li class="mb-1">Mengembangkan tampilan antarmuka pengguna (UI) untuk aplikasi
                                            web dengan menggunakan HTML, CSS, dan JavaScript.</li>
                                        <li class="mb-1">Menggunakan framework front-end seperti ReactJS, VueJS, atau
                                            AngularJS untuk membangun aplikasi web yang cepat dan responsif.</li>
                                        <li class="mb-1">Menganalisis kebutuhan pengguna dan merancang tampilan yang
                                            intuitif dan mudah digunakan.</li>
                                        <li class="mb-1">Mengoptimalkan kinerja aplikasi web dan memastikan tampilan
                                            yang konsisten di berbagai perangkat dan browser.</li>
                                        <li class="mb-1">Bekerja sama dengan tim pengembang backend untuk
                                            mengintegrasikan tampilan dengan logika bisnis.</li>
                                    </ul>
                                </trix-editor>
                            </div>
                        </form>




                        <button type="butotn"
                            class="w-1/2 block mx-auto mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">Update</button>
                    </div>





                    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
                    <script
                        src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
                    </script>
                    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js">
                    </script>
                    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js">
                    </script>
                    <script
                        src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js">
                    </script>
                    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js">
                    </script>

                    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

                    <script>
                        function app() {
        return {
            isOpen: false,
            colors: ['#2196F3', '#009688', '#9C27B0', '#FFEB3B', '#afbbc9', '#4CAF50', '#2d3748', '#f56565', '#ed64a6'],
            colorSelected: '#2196F3'
        }
    }
    
    
    
    function applyResign()
    {
        Swal.fire({
            title: 'Terima ajuan ini ?',
            text: "Kamu tidak bisa mengembalikan keadaan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Terima',
            cancelButtonText: 'Pertimbangkan',
            
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Berhasil resign',
                'Member telah resign',
                'success'
                )
            }
        })
    }
    
    function apply()
    {
        Swal.fire({
            title: 'Terima pelamar ini ?',
            text: "Kamu tidak bisa mengembalikan keadaan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Terima',
            cancelButtonText: 'Pertimbangkan',
            
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Pelamar diterima',
                'Pelamar telah diterima',
                'success'
                )
            }
        })
    }
    
    function reject()
    {
        Swal.fire({
            title: 'Tolak pelamar ini ?',
            text: "Kamu tidak bisa mengembalikan keadaan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tolak',
            cancelButtonText: 'Pertimbangkan',
            
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Pelamar ditolak',
                'Pelamar telah ditolak',
                'success'
                )
            }
        })
    }
    
    function rejectResign()
    {
        Swal.fire({
            title: 'Tolak ajuan ini ?',
            text: "Kamu tidak bisa mengembalikan keadaan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tolak',
            cancelButtonText: 'Pertimbangkan',
            
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Resign ditolak',
                'Ajuan resign telah ditolak',
                'success'
                )
            }
        })
    }
    
    function swall(){
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Kamu tidak bisa mengembalikan keadaan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Terhapus',
                'Data sudah terhapus',
                'success'
                )
            }
        })
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
    const avatar = FilePond.create(
    document.querySelector('.my-pond'),
    {
        labelIdle: `Logo Tim`,
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleButtonRemoveItemPosition: 'center bottom',
        files: [
        {
            source: "{{asset('assets/tim/1.png')}}",
            options: {
                type: 'remote'
            }
        }
        ]
    }
    );
    
    FilePond.create(
    document.querySelector('#filepondInput')
    );
    
    
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
                    <script>
                        let ctx = document.getElementById('acquisitions').getContext('2d');
    let pelamar = document.getElementById('statistik_pelamar').getContext('2d');
    let member = document.getElementById('pelamar_statistik').getContext('2d');
    let albert = document.getElementById('albert').getContext('2d');
    let albert2 = document.getElementById('albert2').getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'November', 'Desember'],
            datasets: [{
                label: 'Tugas 2023',
                data: [12, 19, 3, 5, 2, 3, 5, 10, 20, 11, 23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // ...
        }
    });
    
    let chartPelamar = new Chart(pelamar, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'November', 'Desember'],
            datasets: [{
                label: 'Tugas 2023',
                data: [12, 19, 3, 5, 2, 3, 5, 10, 20, 11, 23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // ...
        }
    });
    
    let chartMember = new Chart(member, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'November', 'Desember'],
            datasets: [{
                label: 'Tugas 2023',
                data: [12, 19, 3, 5, 2, 3, 5, 10, 20, 11, 23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // ...
        }
    });
    let chartAlbert = new Chart(albert, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'November', 'Desember'],
            datasets: [{
                label: 'Tugas 2023',
                data: [12, 19, 3, 5, 2, 3, 5, 10, 20, 11, 23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // ...
        }
    });
    let chartAlbert2 = new Chart(albert2, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'November', 'Desember'],
            datasets: [{
                label: 'Tugas 2023',
                data: [12, 19, 3, 5, 2, 3, 5, 10, 20, 11, 23],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            // ...
        }
    });
                    </script>
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
        activeClasses: 'text-blue-600 w-full hover:text-blue-600 :text-blue-500 :hover:text-blue-400 border-blue-600 :border-blue-500 bg-white',
        inactiveClasses: 'text-white hover:text-gray-600 :text-gray-400 border-gray-100 hover:border-gray-300 :border-gray-700 :hover:text-gray-300',
        
    };
    
    const tabs = new Tabs(tabElements, options);
    
    // setting tabs
    const tabElementsMobile = [
    {
        id: 'profil-m-tab',
        triggerEl: document.querySelector('#profil-m-tab'),
        targetEl: document.querySelector('#profil')
    },
    {
        id: 'lowongan-m-tab',
        triggerEl: document.querySelector('#lowongan-m-tab'),
        targetEl: document.querySelector('#lowongan')
    },
    {
        id: 'member-m-tab',
        triggerEl: document.querySelector('#member-m-tab'),
        targetEl: document.querySelector('#member')
    },
    {
        id: 'projek-m-tab',
        triggerEl: document.querySelector('#projek-m-tab'),
        targetEl: document.querySelector('#projek')
    }
    ];
    
    // options with default values
    const optionsMobile = {
        defaultTabId: 'profil-m-tab',
        activeClasses: 'text-blue-600 hover:text-blue-600 :text-blue-500 :hover:text-blue-400 border-blue-600 :border-blue-500',
        inactiveClasses: 'text-gray-500 hover:text-gray-600 :text-gray-400 border-gray-100 hover:border-gray-300 :border-gray-700 :hover:text-gray-300',
        
    };
    const tabsMobile = new Tabs(tabElementsMobile, optionsMobile);
    
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
        activeClasses: ' :bg-gray-800 text-gray-900 :text-white',
        inactiveClasses: 'text-gray-500 :text-gray-400',
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
        id: 'accordion-member-heading-0',
        triggerEl: document.querySelector('#accordion-member-heading-0'),
        targetEl: document.querySelector('#accordion-member-body-0'),
        active: true
    },
    {
        id: 'accordion-member-sm-0',
        triggerEl: document.querySelector('#accordion-member-sm-0'),
        targetEl: document.querySelector('#accordion-member-body-sm-0'),
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
        activeClasses: ' :bg-gray-800 text-gray-900 :text-white',
        inactiveClasses: 'text-gray-500 :text-gray-400',
        onOpen: (item) => {
            
        },
        onClose: (item) => {
            
        },
        onToggle: (item) => {
            
        },
    };
    
    const accordionMember = new Accordion(accordionItemsMember, optionsAccordionMember);
    
    // setting accordion member
    const accordionItemsProjek = [
    {
        id: 'accordion-projek-heading-0',
        triggerEl: document.querySelector('#accordion-projek-heading-0'),
        targetEl: document.querySelector('#accordion-projek-body-0'),
        active: true
    },
    // {
        //     id: 'accordion-member-heading-2',
        //     triggerEl: document.querySelector('#accordion-member-heading-2'),
        //     targetEl: document.querySelector('#accordion-member-body-2'),
        //     active: false
        // },
        // {
            //     id: 'accordion-member-heading-3',
            //     triggerEl: document.querySelector('#accordion-member-heading-3'),
            //     targetEl: document.querySelector('#accordion-member-body-3'),
            //     active: false
            // }
            ];
            
            // options with default values
            const optionsAccordionProjek = {
                alwaysOpen: true,
                activeClasses: ' :bg-gray-800 text-gray-900 :text-white',
                inactiveClasses: 'text-gray-500 :text-gray-400',
                onOpen: (item) => {
                    
                },
                onClose: (item) => {
                    
                },
                onToggle: (item) => {
                    
                },
            };
            
            const accordionProjek = new Accordion(accordionItemsProjek, optionsAccordionProjek);
                    </script>

                    <script>
                        function renderCalendar(){
                let calendarEl = document.getElementById('calendar');
                
                let calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    initialDate: '2023-02-07',
                    height: 'auto',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [
                    {
                        title: 'All Day Event',
                        start: '2023-02-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2023-02-07',
                        end: '2023-02-10'
                    },
                    
                    {
                        title: 'Conference',
                        start: '2023-02-11',
                        end: '2023-02-13'
                    },
                    
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2023-02-28'
                    }
                    ]
                });
                
                calendar.render();
                document.querySelector('style').textContent += "@media screen and (max-width:767px) { .fc-toolbar.fc-header-toolbar {flex-direction:column;} .fc-toolbar-chunk { display: table-row; text-align:center; padding:5px 0; order:3 } }";
                let parent = document.getElementsByClassName('fc-toolbar-title')[0].parentElement;
                parent.style.order ='1';
                setTimeout(function () {
                    calendar.render();
                    let btn = document.getElementsByClassName('fc-button-active');
                    btn[0].click();
                }, 1000);
                
            }
            
            
                    </script>

                    <script>
                        let members = [
            {
                name:'Deva Apriana',
                color: '#123123',
                role:'backend'
            }
            ];
            
            let memberSelected = [];
            let taskFiles = [];
            let fileSelected = [];
            
            function editProjek()
            {
                memberSelected = [
                {
                    name:'Deva Apriana',
                    color: '#123123',
                    role:'backend'
                }
                ];
                
                fileSelected = [
                {
                    name: 'SRS.pdf'
                },
                {
                    name: 'ERD.pdf'
                }
                ];
                
                displayMembers('edit');
                displayFiles(fileSelected, 'edit');
                
                
            }
            
            function fileProjek(){
                fileSelected = [
                {
                    name: 'SRS.pdf'
                },
                {
                    name: 'ERD.pdf'
                }
                ];
                
                displayFiles(fileSelected, 'file-projek');
            }
            
            function editTugas()
            {
                memberSelected = [
                {
                    name:'Deva Apriana',
                    color: '#123123',
                    role:'frontend'
                }
                ];
                
                fileSelected = [
                {
                    name: 'Flowchart.pdf'
                },
                {
                    name: 'Prototype.pdf'
                }
                ];
                
                displayMembers('edit-tugas');
                displayFiles(fileSelected, 'edit-tugas');
                
                
            }
            
            function addMember(member, mode)
            {
                if(mode == 'edit'){
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let membersArea = document.getElementById('members-edit');
                    
                    if(memberSelected.some((e)=>e.member_id == member.id)){
                        
                        document.getElementById('btn-close-edit-member').click();
                        
                        return;
                    }
                    
                    memberSelected.push(member);
                    let input = document.getElementById('inputEditMember').value = '';
                    membersArea.innerHTML= "";
                    membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    document.getElementById('btn-close-edit-member').click();
                    displayMembers('edit');
                    // refreshTask();
                    
                    
                } else if(mode == 'tugas'){
                    
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let membersArea = document.getElementById('members-tugas');
                    
                    if(memberSelected.some((e)=>e.member_id == member.id)){
                        
                        document.getElementById('btn-close-tugas-member').click();
                        
                        return;
                    }
                    
                    memberSelected.push(member);
                    let input = document.getElementById('inputTugasMember').value = '';
                    membersArea.innerHTML= "";
                    membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    document.getElementById('btn-close-tugas-member').click();
                    displayMembers('tugas');
                    // refreshTask();
                }else if(mode == 'edit-tugas'){
                    
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let membersArea = document.getElementById('members-edit-tugas');
                    
                    if(memberSelected.some((e)=>e.member_id == member.id)){
                        
                        document.getElementById('btn-close-edit-tugas-member').click();
                        
                        return;
                    }
                    
                    memberSelected.push(member);
                    let input = document.getElementById('inputEditTugasMember').value = '';
                    membersArea.innerHTML= "";
                    membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    document.getElementById('btn-close-edit-tugas-member').click();
                    displayMembers('edit-tugas');
                    // refreshTask();
                }else{
                    
                    let membersArea = document.getElementById('member-task');
                    if(memberSelected.some((e)=>e.id == member.id)){
                        document.getElementById('btn-close-member').click();
                        
                        return;
                    }
                    memberSelected.push(member);
                    let input = document.getElementById('inputMember').value = '';
                    membersArea.innerHTML= "";
                    membersArea.className = 'py-3 rounded-lg bg-white';
                    document.getElementById('btn-close-member').click();
                    displayMembers();
                }
                
            }
            
            
            function searchMember(mode)
            {
                // console.log(input.value);
                document.getElementById('close-btn-edit-task').setAttribute('disabled', 'true');
                if(mode == 'edit'){
                    
                    let membersArea = document.getElementById('members-edit');
                    
                    let input = document.getElementById('inputEditMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)}, "${mode}")'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }else if(mode =='tugas'){
                    let membersArea = document.getElementById('members-tugas');
                    
                    let input = document.getElementById('inputTugasMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)}, "${mode}")'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }else if(mode =='edit-tugas'){
                    let membersArea = document.getElementById('members-edit-tugas');
                    
                    let input = document.getElementById('inputEditTugasMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)}, "${mode}")'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }else{
                    
                    let membersArea = document.getElementById('members');
                    membersArea.innerHTML = '';
                    let input = document.getElementById('inputMember').value;
                    let nodeMember = "";
                    
                    if( input != " " && input.length != 0){
                        members.forEach((member)=>{
                            
                            
                            if(member.name.toLowerCase().replace(/\s/g, '').includes(input.toLowerCase().replace(/\s/g, '')) ){
                                
                                
                                nodeMember+=`<li class="p-3 text-center list-none sm:py-4 hover:bg-slate-200">
                                    <button onclick='addMember(${JSON.stringify(member)})'>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-1 ">
                                                <p class="text-sm font-medium text-gray-900 truncate :text-white">
                                                    ${member.name}
                                                </p>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            <span class="text-xs font-semibold text-white mr-2 px-2.5 py-0.5 rounded :bg-blue-200 :text-blue-800" style="background-color: ${member.color}">${member.role}</span>
                                            
                                            
                                        </div>
                                    </button>
                                </li>`
                                
                            }
                            
                            
                        })
                        
                        if(nodeMember == ""){
                            nodeMember = "<p class='text-center text-gray-200'>No Member Found</p>"
                            membersArea.innerHTML= nodeMember;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                        }else{
                            membersArea.innerHTML= ``;
                            membersArea.className = 'py-3 my-3 block rounded-lg bg-white';
                            membersArea.innerHTML= nodeMember;
                        }
                        
                    }else{
                        membersArea.className = 'py-3 my-3 hidden rounded-lg bg-white';
                    }
                }
                
                
                
            }
            
            function displayMembers(mode)
            { 
                
                let displayMemberArea;
                if(mode == 'edit'){
                    
                    displayMemberArea = document.getElementById('member-edit-task');
                }else if(mode == 'tugas'){
                    
                    displayMemberArea = document.getElementById('member-tugas');
                }else if(mode == 'edit-tugas'){
                    
                    displayMemberArea = document.getElementById('member-edit-tugas');
                }else{
                    
                    displayMemberArea = document.getElementById('member-task');
                    
                }
                let nodeMember = "";
                if(memberSelected.length == 0){
                    // let displayMemberArea = document.getElementById('member-task');
                    displayMemberArea.innerHTML = `<p class="text-sm p-2.5  text-gray-500 text-center">Member belum ditambahkan</p>`;
                    
                }else{
                    
                    memberSelected.forEach((member, index)=>{
                        nodeMember += `
                        <div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                            <div class="flex items-center  space-x-2">
                                <div class="flex-1 ">
                                    <p class="text-sm truncate :text-white">
                                        ${member.name}
                                    </p>                      
                                </div>             
                                <span class=" text-white  text-xs font-semibold px-1 py-0.5 rounded :bg-blue-200 :text-blue-800" style="background-color:${member.color}">${member.role}</span>
                                
                                <button onclick="removeMember(${index})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                </button>
                                
                            </div>
                        </div>
                        `
                    })
                    displayMemberArea.innerHTML = nodeMember;
                }
                // }
                
                
            }
            
            function removeMember(index, mode, id)
            {
                if(mode == 'edit'){
                    
                    memberSelected.splice(index, 1);
                    displayMembers('edit');
                    
                    // refreshTask();
                    
                }else if(mode == 'tugas'){
                    
                    memberSelected.splice(index, 1);
                    displayMembers('tugas');
                    
                    // refreshTask();
                }else{
                    memberSelected.splice(index, 1);
                    displayMembers();
                    displayMembers('edit');
                    displayMembers('tugas');
                    displayMembers('edit-tugas');
                }
            }
            
            function addFile(mode)
            {
                
                if(mode == 'edit'){
                    let files = document.getElementById('input-edit-files').files;
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let closeButton = document.getElementById('btn-close-edit-file');
                    for (var i = 0; i < files.length; i++)
                    {
                        
                        if(fileSelected.some((e)=>e.name == files[i].name)){            
                            
                            continue;
                        }else{    
                            
                            fileSelected.push(files[i]);
                            
                        }
                        
                        
                    } 
                    
                    
                    
                    closeButton.click();
                    
                    displayFiles(fileSelected, 'edit');
                    
                }else if(mode == 'tugas'){
                    let files = document.getElementById('input-tugas-files').files;
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let closeButton = document.getElementById('btn-close-tugas-file');
                    for (var i = 0; i < files.length; i++)
                    {
                        
                        if(fileSelected.some((e)=>e.name == files[i].name)){            
                            
                            continue;
                        }else{    
                            
                            fileSelected.push(files[i]);
                            
                        }
                        
                        
                    } 
                    
                    
                    
                    closeButton.click();
                    
                    displayFiles(fileSelected, 'tugas');
                }else if(mode == 'edit-tugas'){
                    let files = document.getElementById('input-tugas-edit-files').files;
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let closeButton = document.getElementById('btn-close-tugas-edit-file');
                    for (var i = 0; i < files.length; i++)
                    {
                        
                        if(fileSelected.some((e)=>e.name == files[i].name)){            
                            
                            continue;
                        }else{    
                            
                            fileSelected.push(files[i]);
                            
                        }
                        
                        
                    } 
                    
                    
                    
                    closeButton.click();
                    
                    displayFiles(fileSelected, 'edit-tugas');
                }else if(mode == 'edit-tugas'){
                    let files = document.getElementById('input-files-projek-tambah').files;
                    let task_id = document.querySelector('input[name=task_id]').value;
                    // let closeButton = document.getElementById('btn-close-tugas-edit-file');
                    for (var i = 0; i < files.length; i++)
                    {
                        
                        if(fileSelected.some((e)=>e.name == files[i].name)){            
                            
                            continue;
                        }else{    
                            
                            fileSelected.push(files[i]);
                            
                        }
                        
                        
                    } 
                    
                    
                    
                    closeButton.click();
                    
                    displayFiles(fileSelected, 'file-projek');
                    
                }else{
                    
                    taskFiles = [];
                    let files = document.getElementById('input-files').files;
                    let task_id = document.querySelector('input[name=task_id]').value;
                    let closeButton = document.getElementById('btn-close-file');
                    for (var i = 0; i < files.length; i++)
                    {
                        
                        if(taskFiles.some((e)=>e.name == files[i].name)){            
                            continue;
                        }else{    
                            
                            taskFiles.push(files[i]);
                            
                        }
                        
                        
                    } 
                    
                    
                    
                    closeButton.click();
                    
                    displayFiles(taskFiles);
                }
                
            }
            
            function removeFile(index, id, mode)
            {
                if(mode == 'edit')
                {
                    fileSelected.splice(index, 1);
                    displayFiles(fileSelected, 'edit');
                    
                    
                    // refreshTask();
                    document.getElementById('close-btn-edit-task').removeAttribute('disabled');
                    
                    
                    
                }else if(mode == 'tugas'){
                    fileSelected.splice(index, 1);
                    displayFiles(fileSelected, 'tugas');
                    
                    
                    // refreshTask();
                    document.getElementById('close-btn-tugas').removeAttribute('disabled');
                }else if(mode == 'edit-tugas'){
                    fileSelected.splice(index, 1);
                    displayFiles(fileSelected, 'edit-tugas');
                    
                    
                    // refreshTask();
                    document.getElementById('close-btn-edit-tugas').removeAttribute('disabled');
                }else if(mode == 'file-projek'){
                    fileSelected.splice(index, 1);
                    displayFiles(fileSelected, 'file-projek');
                    
                    
                    // refreshTask();
                    document.getElementById('close-btn-edit-tugas').removeAttribute('disabled');
                }else{
                    taskFiles.splice(index, 1);
                    displayFiles(taskFiles);
                }
                
                
                
            }
            
            function displayFiles(arr, mode)
            {
                
                if(mode == 'edit'){
                    let fileArea = document.getElementById('file-edit-task');
                    fileArea.innerHTML = '';
                    let fileNode = '';
                    if(fileSelected.length == 0){
                        // let displayMemberArea = document.getElementById('member-task');
                        fileNode = `<p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan</p>`;
                        
                    }else{
                        arr.forEach((file,index)=>{
                            fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate :text-white">
                                            ${file.name}
                                        </p>                      
                                    </div>             
                                    
                                    
                                    <button onclick="removeFile(${index}, ${file.id}, 'edit')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>`
                        })
                    }
                    fileArea.innerHTML = fileNode;
                    
                }else if(mode == 'tugas'){
                    let fileArea = document.getElementById('file-tugas');
                    fileArea.innerHTML = '';
                    let fileNode = '';
                    if(fileSelected.length == 0){
                        // let fileArea = document.getElementById('member-task');
                        fileNode = `<p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan</p>`;
                        
                    }else{
                        arr.forEach((file,index)=>{
                            fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate :text-white">
                                            ${file.name}
                                        </p>                      
                                    </div>             
                                    
                                    
                                    <button onclick="removeFile(${index}, ${file.id}, 'tugas')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>`
                        })
                    }
                    fileArea.innerHTML = fileNode;
                }else if(mode == 'edit-tugas'){
                    let fileArea = document.getElementById('file-edit-tugas');
                    fileArea.innerHTML = '';
                    let fileNode = '';
                    if(fileSelected.length == 0){
                        // let fileArea = document.getElementById('member-task');
                        fileNode = `<p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan</p>`;
                        
                    }else{
                        arr.forEach((file,index)=>{
                            fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate :text-white">
                                            ${file.name}
                                        </p>                      
                                    </div>             
                                    
                                    
                                    <button onclick="removeFile(${index}, ${file.id}, 'edit-tugas')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>`
                        })
                    }
                    fileArea.innerHTML = fileNode;
                }else if(mode == 'file-projek'){
                    let fileArea = document.getElementById('file-projek-area');
                    fileArea.innerHTML = '';
                    let fileNode = '';
                    if(fileSelected.length == 0){
                        // let fileArea = document.getElementById('member-task');
                        fileNode = `<p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan</p>`;
                        
                    }else{
                        arr.forEach((file,index)=>{
                            fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate :text-white">
                                            ${file.name}
                                        </p>                      
                                    </div>             
                                    
                                    
                                    <button onclick="removeFile(${index}, ${file.id}, 'file-projek')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>`
                        })
                    }
                    fileArea.innerHTML = fileNode;
                }else{
                    
                    
                    let fileArea = document.getElementById('file-task');
                    fileArea.innerHTML = '';
                    let fileNode = '';
                    if(arr.length == 0){
                        // let fileArea = document.getElementById('member-task');
                        fileNode = `<p class="text-sm p-2.5  text-gray-500 text-center">File belum ditambahkan</p>`;
                        
                    }else{
                        arr.forEach((file,index)=>{
                            fileNode += `<div class='inline-block list-disc rounded p-2 m-2 shadow-md border-black' >
                                <div class="flex items-center  space-x-2">
                                    <div class="flex-1 ">
                                        <p class="text-sm truncate :text-white">
                                            ${file.name}
                                        </p>                      
                                    </div>             
                                    
                                    
                                    <button onclick="removeFile(${index})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>    
                                    </button>
                                    
                                </div>
                            </div>`
                        })
                    }
                    fileArea.innerHTML = fileNode;
                }
                
            }
                    </script>

</body>

</html>