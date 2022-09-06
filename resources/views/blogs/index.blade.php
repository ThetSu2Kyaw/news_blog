<x-layout> 
    <!-- header section -->
    <section class="flex flex-col items-center bg-black text-white px-3">
        <header class="flex flex-col sm:max-w-4xl w-full max-w-sm">
            <!-- navbar -->
            
            <!-- end of navbar -->
        <div class="text-center sm:py-3 sm:pb-12 py-2 pb-10 overflow-hidden mt-12">
            <div class="font-extrabold sm:text-4xl text-3xl">The Venom Blog</div>
            <p class="font-xs mt-2">Your source of great content</p>
        </div>
    </header>
    </section>

    <!-- content -->
    <section class="flex flex-col items-center bg-white text-black px-3">
        <div class="flex flex-col sm:max-w-4xl w-full max-w-sm">
            <!-- category section -->
            <ul class="flex items-center justify-center p-5">
                @if(!request('category'))
                    <li class="hover:text-white hover:bg-indigo-700 cursor-pointer py-1 px-2 sm:ml-3 ml-2 rounded capitalize bg-indigo-700 text-white"><a href="/">All</a></li>
                @else
                    <li class="hover:text-white hover:bg-indigo-700 cursor-pointer py-1 px-2 sm:ml-3 ml-2 rounded capitalize"><a href="/">All</a></li>
                @endif
                @foreach($categories as $category)
                    <li class="hover:text-white hover:bg-indigo-700 cursor-pointer py-1 px-2 sm:ml-3 ml-2 rounded capitalize {{request('category')== $category->slug? 'bg-indigo-700 text-white': ''}}"><a href="/?category={{$category->slug}}{{request('search')? '&search='.request('search'): ''}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
           
            <!-- search component -->
                <div>
                    <form>
                        <div class="flex mb-10 justify-center w-full">
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{request('category')}}">
                            @endif
                            <input type="text" name="search" class="px-3 py-1.5 text-base font-normal w-1/2 border border-gray-300 text-gray-700 bg-white rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none border-r-0 rounded-r-none" placeholder="Search" value="{{request('search')}}">
                            <button type="submit" class="btn inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out flex items-center rounded-l-none">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            <!-- end of search component -->

            <!-- blog card section -->
            <x-blogs-section :blogs="$blogs"/>
            <!-- end of blog card section -->
        </div>
        {{$blogs->links()}}
    </section>
</x-layout>