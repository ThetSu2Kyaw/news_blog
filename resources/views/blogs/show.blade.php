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

           <!-- comments section -->
               
            <!-- comment form -->
            @auth
                <div class="mt-8 shadow-lg border border-gray-300 rounded p-3 mb-8">
                    <form method="POST" action="/blogs/{{$blog->slug}}/comments">
                        @csrf
                        <div class="flex justify-center my-1 mx-2.5">
                            <textarea name="body" rows="7" placeholder="say something ..." class="placeholder-gray-500 focus:outline-0 p-2 text-sm w-full"></textarea>
                        </div>
                        <div class="flex justify-end mx-2 my-2 mt-3">
                        <button type="submit" class="bg-indigo-600 text-white text-sm py-2 px-3 rounded">Submit</button>
                        </div>
                    </form>
                </div>
            @endauth
            <!-- end of form -->

            <!-- comments -->
            @php
                $comments = $blog->comments()->latest()->paginate(3);
            @endphp
            @if($comments->count() != 0)
                @auth
                    <div class="mt-5 shadow-lg border border-gray-300 rounded p-3">
                        <div class="text-2xl text-indigo-600 font-bold border-b pb-3">{{$comments->count()}} <span class="text-black text-sm font-normal">Comments</span></div>
                        <!-- single comment -->
                        @foreach($comments as $comment)
                            <div class="my-4 -mx-1 pb-3 border-b">
                                <div class="flex items-center">
                                    <img src="https://conference.pecb.com/wp-content/uploads/2017/10/no-profile-picture-300x216.jpg" alt="" width="70" height="70">
                                    <div class="ml-1 text-sm text-indigo-600 font-semibold flex flex-col">
                                        <div>{{$comment->author->name}}</div>
                                        <div class="text-gray-500 font-thin">{{$comment->created_at->diffForHumans()}}</div> 
                                    </div>
                                </div>
                                <div class="text-sm mt-3 ml-2 text-gray-700">{{$comment->body}}</div>
                            </div>
                        @endforeach
                        {{$comments->links()}}
                    </div>
                @else
                    <p class="text-center mt-4">Please <a href="/login" class="text-indigo-600">Login</a> to participate in this discussion.</p>
                @endauth
            @endif

           <!-- end of comments section -->
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