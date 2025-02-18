<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $jsonPath = storage_path('app/public/data.json');
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        
        $results = collect($jsonData['results']);

        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $pageData = $results->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedResults = new LengthAwarePaginator(
            $pageData,
            $results->count(),
            $perPage,
            $currentPage,
            ['path'=> url('/results')]
        );
        return view('result', compact('paginatedResults'));
    }
}
