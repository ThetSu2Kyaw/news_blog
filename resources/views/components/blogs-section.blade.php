@props(['blogs'])
<div class="flex flex-wrap justify-center -mx-2 md:mx-4 lg:mx-0" id="blogs">
    @forelse($blogs as $blog)
        <x-blog-card :blog="$blog"/>
    @empty
        <p class="text-center content-center mb-12">No Blogs Found</p>
    @endforelse
</div>
