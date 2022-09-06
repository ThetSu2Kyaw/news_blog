<x-admin-layout>
	<!-- fixed navbar	 -->
		<x-admin-navbar/>
	<!-- end of fixed navbar -->

	<!-- blog create form -->
	<div class="items-center flex md:mt-32 mt-24 md:w-2/4 w-full md:p-0 p-4">
        <div class="text-white border border-gray-200 w-full p-3 rounded">
            <div class="flex flex-col items-center justify-center max-w-lg">
                <h3 class="text-xl">Blog Create Form</h3>
                <form action="/admin/blogs/store" class="w-full items-center flex flex-col mt-4" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-3/4 my-2">
                        <label for="title" class="block mb-1">Title</label>
                        <input type="text" name="title" id="title" class="rounded border border-gray-200 p-1 px-2 bg-transparent w-full focus:border-indigo-500 focus:outline-none text-gray-200 text-sm placeholder-gray-300" placeholder="Title">
                    </div>
                    <div class="w-3/4 my-2">
                        <label for="slug" class="block mb-1">Slug</label>
                        <input type="text" name="slug" id="slug" class="rounded border border-gray-200 p-1 px-2 bg-transparent w-full focus:border-indigo-500 focus:outline-none text-gray-200 text-sm placeholder-gray-300" placeholder="Slug">
                    </div>
                    <div class="w-3/4 my-2">
                        <label for="intro" class="block mb-1">Intro</label>
                        <input type="text" name="intro" id="intro" class="rounded border border-gray-200 p-1 px-2 bg-transparent w-full focus:border-indigo-500 focus:outline-none text-gray-200 text-sm placeholder-gray-300" placeholder="Intro">
                    </div>
                    <div class="w-3/4 my-2">
                        <label for="body" class="block mb-1">Thumbnail</label>
                        <input type="file" id="body" name="thumbnail" class="rounded border border-gray-200 md:p-2 p-1 px-2 bg-transparent w-full focus:border-indigo-500 focus:outline-none text-gray-200 text-sm placeholder-gray-300">
                    </div>
                    <div class="w-3/4 my-2">
                        <label for="body" class="block mb-1">Body</label>
                        <textarea id="body" name="body" class="rounded border border-gray-200 md:p-2 p-1 px-2 bg-transparent w-full focus:border-indigo-500 focus:outline-none text-gray-200 text-sm placeholder-gray-300" rows="10" placeholder="body"></textarea>
                    </div>
					<div class="w-3/4 my-2">
                        <label for="category" class="block mb-1">Category</label>
						<select name="category_id" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-200 bg-black-alt bg-clip-padding bg-no-repeat
    					border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:border-indigo-500 focus:outline-none" aria-label="Default select example">
							<!-- <option selected>Open this select menu</option> -->
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
    					</select>

                    </div>
					<div class="w-3/4 my-2">
						<button class="rounded border border-gray-200 md:p-2 p-1 bg-transparent w-full focus:bg-indigo-800 focus:border-indigo-500 focus:text-black focus:outline-none text-gray-200">Submit</button>
					</div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>