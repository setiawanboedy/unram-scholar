<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Illuminate\Support\Str;

class SearchResult extends Component
{
    use WithPagination;

    public $query = '';

    #[On('searchTriggered')]
    public function updateSearch($query)
    {
        $this->query = strtolower(trim($query));

    }

    public function render()
    {
        $jsonPath = storage_path('app/public/data.json');
        if (!file_exists($jsonPath)) {
            return view('livewire.search-results', ['results' => collect([])]);
        }

        // Baca file JSON
        $jsonData = json_decode(file_get_contents($jsonPath), true);

        // Pastikan JSON memiliki key 'results'
        if (!isset($jsonData['results'])) {
            return view('livewire.search-results', ['results' => collect([])]);
        }

        $results = collect($jsonData['results'])->filter(function ($item) {
            return Str::contains(Str::lower($item['title']), Str::lower($this->query));
        });

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

        return view('livewire.frontend.search-result', [
            'paginatedResults'=> $paginatedResults,
            'results'=>$results
        ]);
    }
}
