<nav class="flex items-center justify-between px-10  py-6">
  
  
  <!-- drawer init and toggle -->
  <div class="text-center md:hidden">
    <button class="text-black  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-body-scrolling" data-drawer-show="drawer-body-scrolling" data-drawer-body-scrolling="true" aria-controls="drawer-body-scrolling">
      <svg aria-hidden="true" class=" text-black w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  
  <!-- drawer component -->
  <div id="drawer-body-scrolling" class="fixed md:hidden z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800 transition-transform left-0 top-0 -translate-x-full" tabindex="-1" aria-labelledby="drawer-body-scrolling-label" aria-hidden="true">
    <h5 id="drawer-body-scrolling-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
    <button type="button" data-drawer-dismiss="drawer-body-scrolling" aria-controls="drawer-body-scrolling" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close menu</span>
    </button>
    <div class="  py-4 overflow-y-auto">
      <ul class="mx-auto">
        <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="font-semibold"> <a href="{{url('/')}}">Home</a> </span>
      </li>
      <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="font-semibold active:text-[#EC5252]"><a href="{{url('/team-list')}}">All Team</a></span>
    </li>
    <li class="flex space-x-2 mt-10 cursor-pointer active:text-[#EC5252] hover:text-[#EC5252] duration-150">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path d="M12 14l9-5-9-5-9 5 9 5z" />
      <path
      d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
    </svg>
    <span class="font-semibold"><a href="{{url('/my-team')}}">My Team</a></span>
    </li>
    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
    <span class="font-semibold"><a href="{{url('/profile')}}">Profile</a></span>
  </li>
  <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
    stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
  </svg>
  <span class="font-semibold"><a href="{{url('/setting')}}">Setting</a></span>
</li>
<form action="{{url('logout')}}" method="POST">
  @csrf
  <button type="submit" class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Logout</button>
</form>
</ul>
</div>
</div>


</nav>
