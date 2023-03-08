@extends('user.layout.layout')

@section('content')

{{-- <div class="relative h-screen bg-center bg-cover bg-black"
    style="background-image: url({{asset('assets/fuji.mp4')}});">
    <video class="video w-full min-h-screen h-auto object-fit" autoplay loop muted>
        <source src="{{asset('assets/fuji.mp4')}}" type="video/mp4">
    </video>
</div> --}}

{{-- <img src="{{asset('assets/mobile/bg_team_list.png')}}" class="" alt=""> --}}


<section class="h-[70vh] w-full fixed rounded-t-[50px] bottom-0 bg-white">



</section>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
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
                                        <input x-on:change="mode='leader'" id="helper-radio-4" name="mode" type="radio"
                                            :checked="mode=='leader' ? true : false" value="leader"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-radio-4" class="font-medium text-gray-900 :text-gray-300">
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
                                        <input id="helper-radio-5" x-on:change="mode='member'" name="mode" type="radio"
                                            :checked="mode=='member' ? true : false" value="member"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 :focus:ring-blue-600 :ring-offset-gray-700 :focus:ring-offset-gray-700 focus:ring-2 :bg-gray-600 :border-gray-500">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-radio-5" class="font-medium text-gray-900 :text-gray-300">
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


{{-- <div class="flex w-full">
    <a href="#"
        class="block bg-[#FCF8E8] p-6 m-4 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
            acquisitions 2021</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions
            of 2021 so far, in reverse chronological order.</p>
    </a>
</div> --}}

@endsection