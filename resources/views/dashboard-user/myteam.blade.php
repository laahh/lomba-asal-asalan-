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
    @vite('resources/css/app.css')
</head>

<body>
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
                            <a href="/profile"
                                class="block px-4 py-2 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white">Profil
                                Saya</a>
                        </li>

                        {{-- <li class="px-4">

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

                        </li> --}}
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
                        <a href="/myteam"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            Saya</a>
                    </li>
                    <li>
                        <a href="/tim-list"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700">Tim
                            List</a>
                    </li>



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
            </div>
        </div>
    </nav>



    <div class="text-poppins ml-10 mb-10 mt-10">
        <h1 class="text-2xl font-semibold font-serif">My Team List </h1>

    </div>

    <div class="grid grid-cols-2 mx-10 ">
        <div class="grid grid-cols-3 col-span-1 ">
            <a href="" class="rounded-md mr-3 group relative block h-64 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h2 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>
            <a href="" class="rounded-md mr-3 group relative block h-64 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h2 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>
            <a href="" class="rounded-md mr-3 group relative block h-64 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h2 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-xl font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>

        </div>

        <div class="ml-10">


            <div id="alert-additional-content-5"
                class=" p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
                role="alert">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-800 dark:text-gray-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Task List Frontend Developer</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                    More info about this info dark goes here. This example text is going to run a bit longer so that you
                    can see how spacing within an alert works with this kind of content.
                </div>
                <div class="flex">
                    <button type="button"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-800">
                        <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        View more
                    </button>
                    <button type="button"
                        class="text-gray-800 bg-transparent border border-gray-700 hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-800 dark:text-gray-300 dark:hover:text-white"
                        data-dismiss-target="#alert-additional-content-5" aria-label="Close">
                        Dismiss
                    </button>
                </div>
            </div>

            <div id="alert-additional-content-5"
                class="my-5 p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
                role="alert">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-800 dark:text-gray-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Task List Backend Developer
                    </h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                    More info about this info dark goes here. This example text is going to run a bit longer so that you
                    can see how spacing within an alert works with this kind of content.
                </div>
                <div class="flex">
                    <button type="button"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-800">
                        <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        View more
                    </button>
                    <button type="button"
                        class="text-gray-800 bg-transparent border border-gray-700 hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-800 dark:text-gray-300 dark:hover:text-white"
                        data-dismiss-target="#alert-additional-content-5" aria-label="Close">
                        Dismiss
                    </button>
                </div>
            </div>


        </div>

    </div>





    <script src="../path/to/flowbite/dist/flowbite.min.js">
        </>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js">
    </script>
</body>

</html>