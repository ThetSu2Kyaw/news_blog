<x-admin-layout>
	<!-- fixed navbar	 -->
	<x-admin-navbar/>
	<!-- end of fixed navbar -->

	<!-- card -->
	<div class="py-1 w-full overflow-hidden md:px-8 sm:px-8 px-5 lg:px-24 md:mt-28 mt-16">	
		
		<div class="py-2 sm:pb-2 pb-2 justify-center md:p-4 sm:p-2 text-sm  overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-slate-500 border-separate md:[border-spacing:1rem] sm:[border-spacing:0.5rem] rounded mb-4">
                <thead>
                    <tr class="row">
                    <th class="text-left md:w-72 sm:w-36">Title</th>
                    <th class="text-left md:w-72 sm:w-36">Intro</th>
                    <th class="text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr class="row">
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->intro}}</td>
                            <td class="flex flex-wrap justify-left">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-1 md:px-3 sm:px-2 rounded"><a href="/admin/blogs/{{$blog->slug}}/edit">Edit</a></button>
                                <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 md:px-3 sm:px-2 rounded sm:ml-1 md:ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="z-20">
                {{$blogs->links()}}
            </div>
            
        </div>
	</div>
</x-admin-layout>