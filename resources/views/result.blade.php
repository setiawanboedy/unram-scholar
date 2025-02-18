@extends('frontend.layouts.app', [
    'title'=>'Unram Scholar',
    'bgWhite'=>'bg-[#E9F1FB]',
    ])
@section('content')
<!-- Centered Search Section -->
    <section class="flex items-center justify-center px-4 pt-8">
        <form class="max-w-xl w-full mx-auto">
            <label for="default-search" class="mb-2 text-sm font-medium sr-only">Search</label>
            <div class="relative">
                <!-- Search Input -->
                <input type="search" id="default-search"
                    class="peer block w-full p-4 ps-10 text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:border-blue-500 focus:outline-none"
                    placeholder="Search Unram Scholar..." required />
            
                <!-- SVG Icon (Changes color when input is focused) -->
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-700 peer-focus:text-blue-500 transition-colors duration-200"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
            </div>
            
        </form>
    </section>

    <section class="container mx-auto bg-white rounded-xl py-8 px-4 mt-10">
        <div class="flex items-center justify-center">
            <ul class="list-none space-y-2 flex flex-col">
                <li class="items-start max-w-3xl w-full rounded-md hover:bg-gray-100 cursor-pointer">
                    <a href="{{route('detail.index')}}" class="flex flex-col gap-1 p-4">
                        <div class="font-semibold text-xl">Profil Keterampilan Proses Sains Mahasiswa Melalui Implementasi SPADA Unram</div>
                        <div class="text-gray-600">2021 <span>.</span> Muhammad Syazali, Aisa Nikmah Rahmatih, et al. <span>.</span> <span class="italic">JOURNAL PIJAR MIPA</span></div>
                        <div class="text-sm font-semibold flex items-center gap-4">
                            <span>Cited by 25</span>
                            <span class="text-blue-600 underline cursor-pointer">PDF</span>
                        </div>
                    </a>
                </li>
                <li class="items-start max-w-3xl w-full rounded-md hover:bg-gray-100 cursor-pointer">
                    <a href="./detail.html" class="flex flex-col gap-1 p-4">
                        <div class="font-semibold text-xl">Profil Keterampilan Proses Sains Mahasiswa Melalui Implementasi SPADA Unram</div>
                        <div class="text-gray-600">2021 <span>.</span> Muhammad Syazali, Aisa Nikmah Rahmatih, et al. <span>.</span> <span class="italic">JOURNAL PIJAR MIPA</span></div>
                        <div class="text-sm font-semibold flex items-center gap-4">
                            <span>Cited by 25</span>
                            <span class="text-blue-600 underline cursor-pointer">PDF</span>
                        </div>
                    </a>
                </li>
                <li class="items-start max-w-3xl w-full rounded-md hover:bg-gray-100 cursor-pointer">
                    <a href="./detail.html" class="flex flex-col gap-1 p-4">
                        <div class="font-semibold text-xl">Profil Keterampilan Proses Sains Mahasiswa Melalui Implementasi SPADA Unram</div>
                        <div class="text-gray-600">2021 <span>.</span> Muhammad Syazali, Aisa Nikmah Rahmatih, et al. <span>.</span> <span class="italic">JOURNAL PIJAR MIPA</span></div>
                        <div class="text-sm font-semibold flex items-center gap-4">
                            <span>Cited by 25</span>
                            <span class="text-blue-600 underline cursor-pointer">PDF</span>
                        </div>
                    </a>
                </li>
                
                
            </ul>
        </div>
    </section>
@endsection