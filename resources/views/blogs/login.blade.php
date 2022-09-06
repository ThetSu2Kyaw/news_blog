<x-layout>
<!-- header section -->
<section class="flex flex-col items-center bg-black text-white px-3">
<header class="flex flex-col sm:max-w-4xl w-full max-w-sm">
    <!-- navbar -->
    <x-navbar/>
    <!-- end of navbar -->
</header>
</section>
<!-- login card -->
<div class="flex flex-col justify-center min-h-screen overflow-hidden mt-14">
    <div
        class="w-full p-6 m-auto bg-white border-t border-indigo-600 rounded shadow-lg shadow-indigo-800/50 lg:max-w-md max-w-xs sm:max-w-sm">
        <h1 class="text-3xl font-semibold text-center text-indigo-700">Login</h1>

        <form class="mt-6" action="/login" method="POST">
            @csrf
            <div>
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
                        Login
                    </button>
                </div>
        </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? <a href="/register"
                class="font-medium text-indigo-600 hover:underline">Sign up</a></p>
    </div>
</div>
</x-layout>