<x-admin-layout>
	<!-- fixed navbar	 -->
	<x-admin-navbar/>
	<!-- end of fixed navbar -->

	<!-- card -->
	<div class="flex flex-col py-1 w-full overflow-hidden md:px-8 sm:px-24 px-5 lg:px-24 md:mt-32 mt-20">	
		
		<div class="flex flex-wrap md:flex-nowrap py-2 sm:pb-2 pb-2 justify-between">
			
			<div class="flex items-center border border-gray-500 rounded p-2 bg-black md:w-1/3 w-full mx-4 text-gray-200 mb-4">
				<div class="py-3 px-4 bg-pink-600 items-center flex mx-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current h-6 w-6">
						<path d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"/>
					</svg>
				</div>
				<div class="uppercase flex flex-col items-center w-full sm:text-base text-sm">
					<p>Total Blog</p>
					<p>{{$blogs->count()}}</p>
				</div>
			</div>

			<div class="flex items-center border border-gray-500 rounded p-2 bg-black md:w-1/3 w-full mx-4 text-gray-200 mb-4">
				<div class="py-3 px-4 bg-fuchsia-600 items-center flex mx-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-6 w-6">
						<path d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z"/>
					</svg>
				</div>
				<div class="uppercase flex flex-col items-center w-full sm:text-base text-sm">
					<p>Total Category</p>
					<p>{{$categories->count()}}</p>
				</div>
			</div>

			<div class="flex items-center border border-gray-500 rounded p-2 bg-black md:w-1/3 w-full mx-4 text-gray-200 mb-4">
				<div class="py-3 px-4 bg-purple-600 items-center flex mx-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-6 w-6">
						<path d="M256 32C114.6 32 .0272 125.1 .0272 240c0 49.63 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734C1.979 478.2 4.75 480 8 480c66.25 0 115.1-31.76 140.6-51.39C181.2 440.9 217.6 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32z"/>
					</svg>
				</div>
				<div class="uppercase flex flex-col items-center w-full sm:text-base text-sm">
					<p>Total Comment</p>
					<p>{{$comments->count()}}</p>
				</div>
			</div>		
		
		</div>

		<div class="flex flex-wrap md:flex-nowrap py-2 sm:-mt-4 md:pb-4 pb-2 justify-between md:mr-24">
			<div class="flex items-center border border-gray-500 rounded p-2 bg-black md:w-1/3 w-full mx-4 text-gray-200 mb-4">
				<div class="py-3 px-4 bg-rose-600 items-center flex mx-2 rounded">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current h-6 w-6">
						<path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
					</svg>
				</div>
				<div class="uppercase flex flex-col items-center w-full sm:text-base text-sm">
					<p>Total User</p>
					<p>{{$users->count()}}</p>
				</div>
			</div>	
		</div>

		<div class="flex flex-wrap md:flex-nowrap py-2 md:pb-4 pb-2 justify-between border-t-2 border-gray-500">
		</div>

	</div>
</x-admin-layout>