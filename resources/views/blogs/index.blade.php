<x-layout>    
    <!-- header section -->
    <section class="flex flex-col items-center bg-black text-white px-3">
    <header class="flex flex-col sm:max-w-4xl w-full max-w-sm">
        <!-- navbar -->
        <x-navbar/>
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
                    <li class="hover:text-white hover:bg-indigo-700 cursor-pointer py-1 px-2 sm:ml-3 ml-2 rounded capitalize {{request('category')== $category->slug? 'bg-indigo-700 text-white': ''}}"><a href="/?category={{$category->slug}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
           
            <!-- search component -->
            <!-- <div class="flex justify-center">
                <form action="">
                <div class="flex input-group w-full">
                    <input type="search" class="form-control border border-gray-300 w-1/2">
                </div>
                </form>
            </div> -->
            <!-- end of search component -->

            <!-- blog card section -->
            <x-blogs-section :blogs="$blogs"/>
            <!-- end of blog card section -->
        </div>
        {{$blogs->links()}}
    </section>
</x-layout>