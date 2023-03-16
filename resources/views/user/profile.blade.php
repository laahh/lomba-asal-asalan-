<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"
        integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
    />

    <title>Profile</title>
</head>

<body>

    <div>

        {{--Navbar MD LG XL--}}
    <nav class="mb-4 hidden md:block mx-20  border-gray-200 px-2 sm:px-4 py-2.5 rounded :bg-gray-900">
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
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md::hover:text-white :text-gray-400 :hover:bg-gray-700 :hover:text-white md::hover:bg-transparent :border-gray-700
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
      

        {{-- @if (session('success'))

        <div class="p-4 ml-10 my-4 w-3/4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400"
            role="alert">
            {{ session('success') }}
        </div>
        @endif --}}
        <div class="flex md:mx-10 flex-col md:flex-row ">
            <div class="flex mt-5 lg:w-[40%] flex-col justify-center items-center">
                <div
                    class="relative flex flex-col items-center rounded-[20px] w-full mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none">
                    <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
                        <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png'
                            class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                            <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[2px] border-white  dark:!border-navy-700">
                                {{-- <img class="h-full w-full rounded-full" src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar11.1060b63041fdffa5f8ef.png' alt="" /> --}}
                                <div class="mx-auto w-[87px] h-[87px]  mb-4 shadow-inset">
                                    <input class="my-pond" type="file" 
                                    class="filepond"
                                    name="filepond"
                                    accept="image/*"/>
                                </div>
                            </div>
                    </div>
                    <div class="mt-16 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            Charlie
                        </h4>
                        <p class="text-base font-normal text-gray-600">Product Manager | Scrum Master | Team Leader</p>
                    </div>
                    <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">8</p>
                            <p class="text-sm font-normal text-gray-600">Tim</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">
                                30
                            </p>
                            <p class="text-sm font-normal text-gray-600">Projek</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">
                                434
                            </p>
                            <p class="text-sm font-normal text-gray-600">Tugas</p>
                        </div>
                    </div>
                </div>

                <div class="w-[80%]">
                    <canvas id="chart" class="w-full h-full min-h-[300px] max-h-[300px]" width="60%"
                        height="60%"></canvas>

                </div>
            </div>

            <div
                class="mt-9 p-5 w-full lg:w-[60%] bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">

                <h1 class="text-xl text-center font-semibold">Data diri</h1>
                <hr class="my-7 h-px bg-gray-200 border-0 ">


               
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required="" value="Charlie">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input type="text" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="linkedin" required="" value="charlie@gmail.com">
                        </div>
                        <div>
                            <label for="number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor
                                Handphone</label>
                            <input type="text" id="number" name="nomor"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="phone number" required="" value="08871522431">
                        </div>
                        <div>
                            <label for="website"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website</label>
                            <input type="text" id="website" name="website"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="website" required="" value="www.example.com">
                        </div>
                        <div>
                            <label for="linkedin"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">LinkedIn</label>
                            <input type="text" id="linkedin" name="linkedin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="linkedin" required="" value="linkedin/charlie">
                        </div>


                        <div class="mb-6">
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="1"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="alamat">123 Main Street, Anytown, USA</textarea>
                        </div>
                    </div>
                    {{-- <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            address</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required="" value="{{$profile->email}}">
                    </div> --}}

                    {{-- @if ($profile->google_id == null)
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="•••••••••" required="">
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm
                            password</label>
                        <input type="password" id="confirm_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="•••••••••" required="">
                    </div>

                    @endif --}}

                    <button type="submit"
                        class="text-white inline-block mx-auto flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                


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
        let ctx = document.getElementById('chart').getContext('2d');
        console.log(ctx)
        // let pelamar = document.getElementById('statistik_pelamar').getContext('2d');
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
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    
    <script>
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
        labelIdle: `Avatar`,
        imagePreviewHeight: 87,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 87,
        imageResizeTargetHeight: 87,
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
    
    </script>
</body>

</html>