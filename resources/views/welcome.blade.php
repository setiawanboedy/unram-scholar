@extends('frontend.layouts.app', ['title'=>'Unram Scholar'])
@section('content')
<!-- Centered Search Section -->
    <section class="flex items-center justify-center min-h-[calc(100vh-200px)] px-4">
        <form class="max-w-xl w-full mx-auto" action="{{route('result.index')}}">
            <label for="default-search" class="mb-4 text-lg md:text-2xl ps-4 font-medium text-gray-800">Search and analyze the world's research.</label>
            <div class="relative mt-4">
                <!-- SVG Icon (Changes color when input is focused) -->
                <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-700 peer-focus:text-blue-500 transition-colors duration-200"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <!-- Search Input -->
                <input type="search" id="query" name='query'
                    class="peer block w-full p-4 ps-10 text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:border-blue-500 focus:outline-none"
                    placeholder="Search Unram Scholar..." required />
            </div>
            
        </form>
    </section>
@endsection