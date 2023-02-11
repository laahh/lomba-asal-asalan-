@extends('user.layout.layout')

@section('content')

{{-- <div class="relative h-screen bg-center bg-cover bg-black" style="background-image: url({{asset('assets/fuji.mp4')}});">
    <video class="video w-full min-h-screen h-auto object-fit" autoplay loop muted>
      <source src="{{asset('assets/fuji.mp4')}}" type="video/mp4">
    </video>
</div>   --}}

<div class="flex w-full">
    <a href="#" class="block bg-[#FCF8E8] p-6 m-4 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <img src="{{asset('assets/isometric.png')}}" class="w-1/2 h-1/2" alt="">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </a>
</div>

@endsection