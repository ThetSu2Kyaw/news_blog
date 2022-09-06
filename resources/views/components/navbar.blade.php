<div class="flex justify-between sm:py-3 py-2 items-center fixed top-0 left-0 w-full overflow-hidden bg-black sm:px-8 px-5 lg:px-24 z-10">
    <div class="font-bold sm:text-lg"><a href="/" class="text-white">Ve<span class="text-indigo-700">nom</span></a></div>
    <div class="flex">
        <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 md:block sm:hidden hidden sm:mt-1"><a href="/#blogs">blogs</a></div>
        @guest
            <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 block  sm:mt-1 mt-2"><a href="/register">register</a></div>
            <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 block ml-2 sm:mt-1 mt-2"><a href="/login">login</a></div>
        @else
        <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 sm:block hidden sm:mt-1 mt-2"><a href="/admin">dashboard</a></div>
        <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 pr-0 block sm:mt-1 mt-2 sm:block hidden"><a href=""><img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="" width="30" height="30" class="rounded-full"></a></div>
            <div class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 pl-2 block sm:mt-1 mt-2"><a href="">{{auth()->user()->name}}</a></div>
            <div>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="capitalize text-indigo-600 hover:text-indigo-700 cursor-pointer text-sm font-semibold py-2 px-3 block ml-2 sm:mt-1 mt-2">logout</button>
                </form>
            </div>
        @endguest
    </div>
    <button class="hidden text-white" id="burger">
        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
        </svg>
    </button>        
</div>
    <!-- mobile menu -->
    <div id="mobile_menu" class="flex flex-col hidden mt-10 py-2 border-t -mx-16 border-b">
        <ul class="w-full text-center">
            <li class="py-2 hover:bg-indigo-700 duration-500 cursor-pointer"><a href="/register">Register</a></li>
            <li class="py-2 hover:bg-indigo-700 duration-500 cursor-pointer"><a href="/login">Login</a></li>
        </ul>   
    </div>

