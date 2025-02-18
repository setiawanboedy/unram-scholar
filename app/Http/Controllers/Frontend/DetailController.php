<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $jsonPath = storage_path('app/public/data.json');
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        // Cari item berdasarkan ID
        $item = collect($jsonData['results'])->firstWhere('id', $id);
        if (!$item) {
            abort(404, 'Item not found');
        }
        $abstract = $this->reconstructAbstract($item['abstract_inverted_index']);
        $authors = $this->authorships($item['authorships']);
        // Extract unique institution names from $authors
        $institutions = collect($authors)
        ->flatMap(function ($author) {
            return $author['institutions'] ?? []; // Extract institutions array
        })
        ->unique('name') // Remove duplicates by name
        ->values()
        ->toArray();

        $related_to = $this->related_count($item['related_works']);
        $cited_percentile = $this->cited_percentile($item['citation_normalized_percentile']['value']);
        $thausand_doalr = $this->thausand_dolar($item['apc_paid']['value_usd']);
        return view('detail', [
            'item' => $item,
            'abstract' => $abstract,
            'authors' => $authors,
            'institutions' => $institutions,
            'related_to' => $related_to,
            'cited_percentile' => $cited_percentile,
            'thausand_dolar' => $thausand_doalr
        ]);
    }

    private function reconstructAbstract($abstractIndex)
    {
        $reconstructedAbstract = [];

        foreach ($abstractIndex as $word => $positions) {
            foreach ($positions as $position) {
                $reconstructedAbstract[$position] = $word;
            }
        }

        ksort($reconstructedAbstract);

        $normalAbstract = implode(' ', $reconstructedAbstract);
        return $normalAbstract;
    }

    private function authorships($authors)
    {
        $authorNames = collect($authors)->map(function ($authorship){
            return [
                'id' => $authorship['author']['id'],
                'name' => $authorship['author']['display_name'],
                'institutions' => $this->institutions($authorship['institutions']),
            ];
        });

        return $authorNames->values()->toArray();
    }

    private function institutions($institutions)
    {
        $institutionNames = collect($institutions)->map(function ($institution){
            return [
                'id' => $institution['id'],
                'name' => $institution['display_name'],
            ];
        });

        return $institutionNames->unique('name')->values()->toArray();
    }

    private function related_count($relateWorks)
    {
        return count($relateWorks);
    }

    private function cited_percentile($value)
    {
        return $value * 100;
    }

    private function thausand_dolar($value)
    {
        return number_format($value, 0, '.', ',');
    }
}
