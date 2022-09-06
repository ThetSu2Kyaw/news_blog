<!-- fixed navbar -->
<div class="flex flex-col py-1 fixed top-0 left-0 w-full overflow-hidden bg-black sm:px-8 px-5 lg:px-24 z-10">
    <div class="flex justify-between w-full">
		<div class="font-bold sm:text-xl text-indigo-700 flex items-center">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current inline h-5 w-5 mr-2"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"/></svg>
			<a href="/" class="text-white">Ve<span class="text-indigo-700">nom</span></a>
		</div>
    	<div class="flex sm:items-center">
			<div class="capitalize text-indigo-600 hover:text-indigo-700 flex cursor-pointer text-sm font-semibold py-2 ml-2">
				<img src="{{auth()->user()->avatar}}" alt="" class="rounded-full md:mr-0 h-8 w-8 block">
				<div class="capitalize cursor-pointer text-sm py-2 ml-2 md:hidden sm:block hover:text-indigo-700">
					<a href="/admin">
						<span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                    </a>
				</div>
				<div class="capitalize cursor-pointer text-sm py-2 ml-2 md:hidden sm:block sm:mr-2 hover:text-indigo-700">
					<a href="/admin/blogs/create">
						<span class="pb-1 md:pb-0 text-sm">Create</span>
                    </a>
				</div>
			</div>
			<div class="capitalize cursor-pointer text-sm py-2 ml-2 hidden md:block">Hi, {{auth()->user()->name}}</div>
    		</div>
		</div>       
		<div class="w-full flex-grow md:flex md:items-center md:w-auto hidden md:block mt-2 md:mt-0 z-20" id="nav-content">
				<ul class="list-reset md:flex flex-1 items-center px-4 md:px-0">
					<li class="mr-6 my-2 md:my-0">
                        <a href="/admin" class="block py-1 md:py-3 align-middle text-lg font-semibold text-indigo-400 flex no-underline hover:text-indigo-100 border-b-2 border-black hover:border-indigo-100">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-current h-4 w-4 mr-2">
								<path d="M511.8 287.6L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6z"/>
							</svg>
							<span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                        </a>
                    </li>
					<li class="mr-6 my-2 md:my-0">
                        <a href="/admin/blogs" class="block py-1 md:py-3 align-middle text-lg font-semibold text-indigo-400 flex no-underline hover:text-indigo-100 border-b-2 border-black hover:border-indigo-100">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current h-4 w-4 mr-2">
								<path d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"/>
							</svg>
							<span class="pb-1 md:pb-0 text-sm">Blogs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/admin/blogs/create" class="block py-1 md:py-3 align-middle text-lg font-semibold text-indigo-400 flex no-underline hover:text-indigo-100 border-b-2 border-black hover:border-indigo-100">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-4 w-4 mr-2">
								<path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"/>
							</svg>
							<span class="pb-1 md:pb-0 text-sm">Create</span>
                        </a>
                    </li>
				</ul>
				
				<!-- <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search" class="w-full bg-black text-sm text-gray-200 transition border border-indigo-800 focus:outline-none focus:border-indigo-600 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-indigo-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </div> -->
				
			</div>
	</div>
    <!-- mobile menu -->
    <div id="mobile_menu" class="flex flex-col sm:hidden mt-10 py-2 border-t -mx-16 border-b hidden">
        <ul class="w-full text-center">
            <li class="py-2 hover:bg-indigo-700 duration-500 cursor-pointer">Register</li>
            <li class="py-2 hover:bg-indigo-700 duration-500 cursor-pointer">Login</li>
        </ul>   
    </div>
<!-- end of fixed navbar -->