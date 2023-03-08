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


    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">

            <form class="flex items-center">
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="voice-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search your project" required>
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">

                    </button>
                </div>

            </form>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <button type="button" data-dropdown-toggle="language-dropdown-menu"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                                <path fill="#b22234" d="M0 0h7410v3900H0z" />
                                <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                                    stroke-width="300" />
                                <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                                <g fill="#fff">
                                    <g id="d">
                                        <g id="c">
                                            <g id="e">
                                                <g id="b">
                                                    <path id="a"
                                                        d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                                    <use xlink:href="#a" y="420" />
                                                    <use xlink:href="#a" y="840" />
                                                    <use xlink:href="#a" y="1260" />
                                                </g>
                                                <use xlink:href="#a" y="1680" />
                                            </g>
                                            <use xlink:href="#b" x="247" y="210" />
                                        </g>
                                        <use xlink:href="#c" x="494" />
                                    </g>
                                    <use xlink:href="#d" x="988" />
                                    <use xlink:href="#c" x="1976" />
                                    <use xlink:href="#e" x="2470" />
                                </g>
                            </svg>
                            English (US)
                        </button>
                        <!-- Dropdown -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                            id="language-dropdown-menu">
                            <ul class="py-2" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2"
                                                xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
                                                viewBox="0 0 512 512">
                                                <g fill-rule="evenodd">
                                                    <g stroke-width="1pt">
                                                        <path fill="#bd3d44"
                                                            d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                            transform="scale(3.9385)" />
                                                        <path fill="#fff"
                                                            d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                            transform="scale(3.9385)" />
                                                    </g>
                                                    <path fill="#192f5d" d="M0 0h98.8v70H0z"
                                                        transform="scale(3.9385)" />
                                                    <path fill="#fff"
                                                        d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                        transform="scale(3.9385)" />
                                                </g>
                                            </svg>
                                            English (US)
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de"
                                                viewBox="0 0 512 512">
                                                <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                                <path d="M0 0h512v170.7H0z" />
                                                <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                            </svg>
                                            Deutsch
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it"
                                                viewBox="0 0 512 512">
                                                <g fill-rule="evenodd" stroke-width="1pt">
                                                    <path fill="#fff" d="M0 0h512v512H0z" />
                                                    <path fill="#009246" d="M0 0h170.7v512H0z" />
                                                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                                </g>
                                            </svg>
                                            Italiano
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                                viewBox="0 0 512 512">
                                                <defs>
                                                    <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                                </defs>
                                                <path fill="#de2910" d="M0 0h512v512H0z" />
                                                <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                                    xlink:href="#a" />
                                                <use width="30" height="20"
                                                    transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                                <use width="30" height="20"
                                                    transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                                                <use width="30" height="20"
                                                    transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                                <use width="30" height="20"
                                                    transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                                    xlink:href="#a" />
                                            </svg>
                                            中文 (繁體)
                                        </div>
                                    </a>
                                </li>
                            </ul>
                    </li>
                    <li class="mt-2">

                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                            type="button">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                            <div class="relative flex">
                                <div
                                    class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900">
                                </div>
                            </div>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                            aria-labelledby="dropdownNotificationButton">
                            <div
                                class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                Notifications
                            </div>
                            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="{{asset('assets/img/team-1.jpg')}}"
                                            alt="Jese image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                                </path>
                                                <path
                                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from
                                            <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>:
                                            "Hey, what's up? All set for the presentation?"
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="{{asset('assets/img/team-2.jpg')}}"
                                            alt="Joseph image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span>
                                            and <span class="font-medium text-gray-900 dark:text-white">5 others</span>
                                            started following you.</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="{{asset('assets/img/team-3.jpg')}}"
                                            alt="Bonnie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                                            and <span class="font-medium text-gray-900 dark:text-white">141
                                                others</span> love your story. See it and view more stories.</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="{{asset('assets/img/team-4.jpg')}}"
                                            alt="Leslie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Leslie
                                                Livingston</span> mentioned you in a comment: <span
                                                class="font-medium text-blue-500" href="#">@bonnie.green</span> what do
                                            you say?</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="{{asset('assets/img/team-1.jpg')}}"
                                            alt="Robert image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Robert Brown</span>
                                            posted a new video: Glassmorphism - learn how to implement the new design
                                            trend.</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="text-poppins ml-10 mb-10 mt-10">
        <h1 class="text-2xl font-semibold font-serif">My Team List </h1>

    </div>

    <div class="lg:grid lg:grid-cols-2 lg:mx-10 ">
        <div class="lg:grid lg:grid-cols-3 lg:col-span-1 flex w-full bg-red-500 overflow-x-auto scrollbar ">
            <a href="" class="w-72 rounded-md mr-3 group relative block h-40 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative flex w-44 h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/1.png') }}"
                            alt="Neil image">
                        <h2 class="mt-4 text-md text-center font-medium sm:text-2xl">Team Web Developer</h2>
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
            <a href="" class=" w-64 rounded-md mr-3 group relative block h-40 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative w-44 flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/2.png') }}"
                            alt="Neil image">

                        <h2 class="mt-4 text-md text-center font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute w-44 p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-md font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>
            <a href="" class=" w-64 rounded-md mr-3 group relative block h-40 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative w-44 flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/4.png') }}"
                            alt="Neil image">

                        <h2 class="mt-4 text-md text-center font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute w-44 p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-md font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>
            <a href="" class=" w-64 rounded-md mr-3 group relative block h-40 ">
                <span class="absolute inset-0 border-2 border-dashed rounded-2xl border-black"></span>

                <div
                    class="relative w-44 flex h-full transform items-end border-2 rounded-2xl border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/3.png') }}"
                            alt="Neil image">

                        <h2 class="mt-4 text-md text-center font-medium sm:text-2xl">Team Web Developer</h2>
                    </div>

                    <div
                        class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-md font-medium sm:text-2xl">Team Web Developer</h3>

                        <p class="mt-4 text-sm sm:text-base">
                            Moto dari team
                        </p>

                        <p class="mt-8 font-bold">Read more</p>
                    </div>
                </div>
            </a>


        </div>

        <div class="xl:ml-10 h-[40vh] max-h-[40vh] bg-blue-500 mt-4 overflow-y-auto scrollbar">


            <div id="alert-additional-content-5"
                class=" px-2 py-2 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
                role="alert">
                <div class="flex items-center">
                    <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/3.png') }}" alt="Neil image">
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Task List Frontend Developer</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                    More info about this info dark goes here. This example text is going to run a bit longer so that you
                    can see how spacing within an alert works with this kind of content.
                </div>

            </div>

            <div id="alert-additional-content-5"
                class="my-5 p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
                role="alert">
                <div class="flex items-center">
                    <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/4.png') }}" alt="Neil image">
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Task List Backend Developer
                    </h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                    More info about this info dark goes here. This example text is going to run a bit longer so that you
                    can see how spacing within an alert works with this kind of content.
                </div>

            </div>
            <div id="alert-additional-content-5"
                class="my-5 p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-800"
                role="alert">
                <div class="flex items-center">
                    <img class="w-12 h-12 mx-auto rounded-full" src="{{ asset('assets/tim/4.png') }}" alt="Neil image">
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-300">Task List Backend Developer
                    </h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 dark:text-gray-300">
                    More info about this info dark goes here. This example text is going to run a bit longer so that you
                    can see how spacing within an alert works with this kind of content.
                </div>

            </div>


        </div>

    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>