<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="mt-10">
            <img class="max-w-xs mx-auto"
                src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_36a38123-6af2-405d-b917-589f75a58fc5.png"
                alt="" />
            <div class="p-2 relative">
                <p class="text-lg mt-4 mb-2 font-semibold">Team Web Developer<span
                        class="text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full"
                        style="background-color:">Web developer</span>
                </p>
                <p class="max-h-[118px] mb-3 overflow-hidden text-ellipsis">testing</p>

                <div class="flex">
                    <p class="w-[15%]">
                        Tags :
                    </p>
                    <div class="w-[85%]">

                        <span class="text-white text-xs font-medium px-2.5 py-0.5 rounded-full"
                            style="background-color: "></span>


                    </div>
                </div>

                <div class="flex -space-x-4 justify-between mt-1">
                    <div>
                    </div>
                    <div class="">
                        <button type="button"
                            class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                                href="">Detail</a></button>
                    </div>
                </div>


                <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6"
                    src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_36a38123-6af2-405d-b917-589f75a58fc5.png"
                    alt="" />
            </div>
        </div>
    </div> --}}



    <div class="mx-6">
        <h1 class="my-6 text-3xl  ">Detail Team </h1>

    </div>


    <div class="mx-6 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-4 mt-10">
        <div class=" rounded-t-md overflow-hidden ">
            <div class="">
                <img class="w-sm"
                    src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
                    alt="" />
                <div class="p-2 relative">
                    <p class="text-lg mt-6 font-semibold">Web Developer</p>
                    <p class="mb-4">Leader Team : Ifa Aprillianto</p>
                    <div class="flex -space-x-4 justify-between mt-1">
                        <div>
                            <div class="flex -space-x-4">
                                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                    src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg"
                                    alt="">
                                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                    src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg"
                                    alt="">
                                <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                    src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg"
                                    alt="">
                                <a class="flex justify-center items-center w-10 h-10 text-xs font-medium text-white bg-gray-700 rounded-full border-2 border-white hover:bg-gray-600 dark:border-gray-800"
                                    href="#">+3</a>
                            </div>
                        </div>


                        <div class="">
                            <button type="button"
                                class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                                    href="{{url('/team-detail')}}">Detail</a></button>
                        </div>
                    </div>


                    <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6"
                        src="https://storage.googleapis.com/kampusmerdeka_kemdikbud_go_id/mitra/mitra_05940313-6a3e-41f8-b320-10bd44a5efe9.jpg"
                        alt="" />
                </div>
            </div>
        </div>







    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>