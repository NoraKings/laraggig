@extends('layout');

@section('content')
@include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid arrow-left"></i> Back</a>
    <div class="mx-4">
        <div class="bg-gray-50 border-gray-200 rounded p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="" alt="">
                <h3 class="text-2xl mb-2"> </h3>
                <div class="text-xl font-bold mb-4"> </div>
                <ul class="flex">
                    <li class="bg-black text-white px-3 py-1 mr-2 rounded-xl">
                        <a href="#">Laravel</a>
                    </li>
                    <li class="bg-black text-white px-3 py-1 mr-2 rounded-xl">
                        <a href="#">API</a>
                    </li>
                    <li class="bg-black text-white px-3 py-1 mr-2 rounded-xl">
                        <a href="#">Backend</a>
                    </li>
                    <li class="bg-black text-white px-3 py-1 mr-2 rounded-xl">
                        <a href="#">Vue</a>
                    </li>
                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                    <div class="text-lg space-y-6">
                        <p></p>
                        <a href="mailto:test@test.com" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-envelope"></i> Visit Website
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <h2> 
        {{ $listing['title'] }} 
    </h2>

    <p> 
        {{ $listing['description'] }} 

    <p>

@endsection