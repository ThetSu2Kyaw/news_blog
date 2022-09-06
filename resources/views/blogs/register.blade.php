<x-layout>
<!-- header section -->
<section class="flex flex-col items-center bg-black text-white px-3 overflow-hidden">
<header class="flex flex-col sm:max-w-4xl w-full max-w-sm">
    <!-- navbar -->
    <x-navbar/>
    <!-- end of navbar -->
</header>
</section>
<!-- register card -->
<div class="mt-5 pt-3">
<div class="flex flex-col justify-center mt-14">
    <div
        class="w-full p-6 m-auto bg-white border-t border-indigo-600 rounded shadow-lg shadow-indigo-800/50 lg:max-w-md max-w-xs sm:max-w-sm mb-4">
        <h1 class="text-3xl font-semibold text-center text-indigo-700">Register</h1>

        <form class="mt-6" action="/register" method="POST">
            @csrf
            <div>
                <label for="name" class="block text-sm text-gray-800">Name</label>
                <input type="text" name="name"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <label for="username" class="block text-sm text-gray-800">Username</label>
                <input type="text" name="username"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-800">Email</label>
                <input type="email" name="email"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <div>
                    <label for="password" class="block text-sm text-gray-800">Password</label>
                    <input type="password" name="password"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-indigo-400 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                        Register
                    </button>
                </div>
        </form>
    </div>
</div>
</div>
</x-layout>