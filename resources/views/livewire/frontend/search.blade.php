<div>
<section class="flex items-center justify-center px-4 pt-8">
    <form class="max-w-xl w-full mx-auto" wire:submit.prevent='search'>
        <label for="default-search" class="mb-2 text-sm font-medium sr-only">Search</label>
        <div class="relative">
            <!-- Search Input -->
            <input wire:model='query' type="search" id="default-search"
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
</div>
