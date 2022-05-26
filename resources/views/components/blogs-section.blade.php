@props(['blogs'])
<!-- blog card section -->
<div class="flex flex-wrap -mx-2 md:mx-4 lg:mx-0">
    @foreach($blogs as $blog)
        <x-blog-card :blog="$blog"/>
    @endforeach
</div>
<!-- end of blog card section -->