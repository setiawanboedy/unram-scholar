<div>
    <div class="flex items-center justify-center">
        <ul class="list-none space-y-2 flex flex-col">
            @if ($results->isNotEmpty())
            @foreach ($paginatedResults as $result)
                @php
                    $authorNames = collect($result['authorships'])->map(function ($authorship) {
                        return $authorship['author']['display_name'] ?? 'Unknown Author'; // Handle missing names
                    })->values()->toArray();
                @endphp
                <li class="items-start max-w-3xl w-full rounded-md hover:bg-gray-100 cursor-pointer">
                    <a href="{{route('detail.index', $result['id'])}}" class="flex flex-col gap-1 p-4">
                        <div class="font-semibold text-xl">{{$result['title']}}</div>
                        <div class="text-gray-600">{{$result['publication_year']}} <span>.</span> {{ implode(', ', array_slice($authorNames, 0, 2)) }}, et al. <span>.</span> <span class="italic">{{ $result['primary_location']['source']['display_name'] ?? '-' }}</span></div>
                        <div class="text-sm font-semibold flex items-center gap-4">
                            <span>Cited by {{$result['cited_by_count']}}</span>
                            <span class="text-blue-600 underline cursor-pointer">
                                <a href='{{$result['best_oa_location']['pdf_url'] ?? '#'}}' class='p-2 hover:rounded-md hover:p-2 hover:bg-gray-300'>PDF</a>
                            </span>
                        </div>
                    </a>
                </li>
            @endforeach
                
            @else
                <div>Tidak ada data</div>
            @endif
        </ul>
    </div>
    @if ($results->isNotEmpty())
    <div class="mt-4 max-w-3xl w-full mx-auto px-4">
        <div class="mt-4 flex justify-center">
            <div class="flex space-x-2">
                {{-- Tombol Previous --}}
                @if ($paginatedResults->onFirstPage())
                    <span class="px-4 py-2 text-white bg-gray-500 rounded-md cursor-not-allowed">Previous</span>
                @else
                    <a href="{{ $paginatedResults->previousPageUrl() }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-500">Previous</a>
                @endif

                {{-- Loop Pagination Numbers --}}
                @php
                    $currentPage = $paginatedResults->currentPage();
                    $lastPage = $paginatedResults->lastPage();
                    $startPage = max(1, $currentPage - 2);
                    $endPage = min($lastPage, $currentPage + 2);
                @endphp

                {{-- Halaman Pertama --}}
                @if ($startPage > 1)
                    <a href="{{ $paginatedResults->url(1) }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-500">1</a>
                    @if ($startPage > 2)
                        <span class="px-4 py-2 text-gray-500">...</span>
                    @endif
                @endif

                {{-- Nomor Halaman Aktif & Sekitarnya --}}
                @for ($page = $startPage; $page <= $endPage; $page++)
                    @if ($page == $currentPage)
                        <span class="px-4 py-2 text-black bg-white border border-gray-400 rounded-md font-bold">{{ $page }}</span>
                    @else
                        <a href="{{ $paginatedResults->url($page) }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-500">{{ $page }}</a>
                    @endif
                @endfor

                {{-- Halaman Terakhir --}}
                @if ($endPage < $lastPage)
                    @if ($endPage < $lastPage - 1)
                        <span class="px-4 py-2 text-gray-500">...</span>
                    @endif
                    <a href="{{ $paginatedResults->url($lastPage) }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-500">{{ $lastPage }}</a>
                @endif

                {{-- Tombol Next --}}
                @if ($paginatedResults->hasMorePages())
                    <a href="{{ $paginatedResults->nextPageUrl() }}" class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-500">Next</a>
                @else
                    <span class="px-4 py-2 text-white bg-gray-500 rounded-md cursor-not-allowed">Next</span>
                @endif
            </div>
        </div>
    </div>
        
    @endif
</div>
