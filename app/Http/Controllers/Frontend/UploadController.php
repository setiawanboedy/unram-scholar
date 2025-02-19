<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
         try {
            $request->validate([
                'fileJson' => 'required',
            ]);

            $filePath = 'public/uploads/data.json';

            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            $request->file('fileJson')->storeAs('uploads', 'data.json', 'public');

            return back()->with('success', "File uploaded successfully.");
         } catch (\Exception $e) {
            return back()->with('error', "File uploaded failed.");
         }
    }
}
