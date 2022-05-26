<x-layout>   
    <!-- header section -->
    <section class="flex flex-col items-center bg-black text-white px-3 lg:py-36 sm:py-14 py-12">
    <header class="flex flex-col sm:max-w-4xl w-full max-w-sm">
        <!-- navbar -->
        <x-navbar/>
        <!-- end of navbar -->
        <div class="text-center sm:py-3 sm:pb-12 py-2 pb-10 overflow-hidden md:-mt-12 px-2">
            <a href="/" class="capitalize text-indigo-800 text-sm pt-4">back to home</a>
            <div class="text-center font-extrabold sm:text-4xl text-3xl items-center flex justify-center mt-2 sm:mb-4">
                <div class="capitalize max-w-xl w-full leading-relaxed">{{$blog->title}}</div>
            </div>
            <div class="flex absolute justify-center w-full left-0">
                <div class="h-full sm:py-3 sm:pb-12 py-2 pb-10 lg:max-w-xl sm:max-w-sm max-w-xs w-full px-6">
                    <img src="https://blog.ipleaders.in/wp-content/uploads/2018/02/BV-Acharya-17-696x392.jpg" class="rounded">
                </div>
            </div>
        </div>
    </header>
    </section>

    <!-- content -->
    <div class="flex justify-center lg:mt-32 sm:mt-24 mt-16 mx-auto pb-5">
        <div class="sm:max-w-sm lg:max-w-xl w-full max-w-xs px-6">
            <div class="mt-1 sm:text-sm text-xs text-center text-gray-700">Author - {{$blog->author->name}}</div> 
            <div class="sm:text-sm text-xs mt-1 text-indigo-500 capitalize text-center">{{$blog->category->name}}</div>
            <div class="mt-1 sm:text-sm text-xs text-center text-gray-500">{{$blog->created_at->diffForHumans()}}</div> 
            <div class="text-gray-700 sm:text-sm text-xs sm:leading-loose leading-relaxed mt-3">
                @foreach(range(1,3) as $num)
                    {!! $blog->body !!}
                @endforeach
            </div>
        </div>
    </div>
    <!-- end of content -->

    <!-- recommend for you-->
    <div class="flex flex-col justify-center mt-5 mx-auto">
        <h2 class="text-xl font-bold text-gray-700 text-center mb-3">Recommended For You</h2>
        <div class="flex flex-col items-center p-3">
            <div class="flex flex-col sm:max-w-4xl w-full max-w-sm">
                <x-blogs-section :blogs="$randomBlogs"/>
            </div>
        </div>
    </div>
</x-layout>