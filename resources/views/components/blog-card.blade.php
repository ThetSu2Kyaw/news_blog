@props(['blog'])
<div class="w-full md:w-1/2 lg:w-1/3 h-full p-2 max-w-xs mx-auto md:mx-0 my-3">
    <div class="w-full shadow-xl rounded-lg">
        <img src="/storage/{{$blog->thumbnail}}" alt="" class="w-full rounded-t-lg" style="height: 200px;">
        <div class="p-3">
            <div class="text-indigo-700 uppercase text-xs my-2 cursor-pointer"><a href="/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></div>
            <a href="/blogs/{{$blog->slug}}" class="text-blue-600 underline"><div class="font-semibold text-lg">{{$blog->title}}</div></a>
            <div class="text-gray-400 text-xs my-1">{{$blog->created_at->diffForHumans()}}</div>
            <div class="text-gray-600 text-sm leading-relaxed mt-2">{{$blog->intro}}</div>
            <div class="flex my-3 items-center">
                <div><img src="{{$blog->author->avatar}}" alt="" width="50" height="50" class="rounded-full"></div>
                <div class="ml-2 text-xs font-semibold text-indigo-700 cursor-pointer"><a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a></div>
            </div>
        </div>
    </div>
</div>