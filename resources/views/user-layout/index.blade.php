@extends('layout.layout-userPage')
@section('title', 'Beranda')
@section('content.user.page')
    <section class="mb-8">
        <h1 class="text-3xl font-semibold dark:text-white">Welcome to Flowbite</h1>
        <p class="mt-2 text-gray-600 dark:text-gray-400">Your go-to solution for seamless website creation.</p>
    </section>
    <section class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h2 class="text-xl font-semibold dark:text-white">Feature 1</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Details about the first feature.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h2 class="text-xl font-semibold dark:text-white">Feature 2</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Details about the second feature.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h2 class="text-xl font-semibold dark:text-white">Feature 3</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Details about the third feature.</p>
        </div>
    </section>
    <section class="mt-8">
        <h2 class="text-2xl font-semibold dark:text-white">Get Started</h2>
        <p class="mt-2 text-gray-600 dark:text-gray-400">Begin your journey with Flowbite by exploring our
            comprehensive resources.</p>
        <a href="#" class="inline-block mt-4 px-6 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800">Learn
            More</a>
    </section>
@endsection
