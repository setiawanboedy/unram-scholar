<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class SearchResult extends Component
{
    use WithPagination;

    public function render()
    {

        $jsonPath = storage_path('app/public/data.json');
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        $results = collect($jsonData['results']); // Convert JSON data to Collection

        // Paginate manually
        $perPage = 10;
        $currentPage = request()->query('page', 1);
        $pagedData = $results->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $paginatedResults = new LengthAwarePaginator(
            $pagedData, 
            $results->count(), 
            $perPage, 
            $currentPage, 
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('livewire.frontend.search-result', compact('paginatedResults'));
    }
}
