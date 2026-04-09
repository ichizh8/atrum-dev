<?php

namespace App\Http\Controllers\Api\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function upload(Request $request)
    {
        $files = $request->file('files');
        $result = [];
        foreach ($files as $key => $file) {
            $fileName = $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $fileName, 'public');

            $result[] = [
                'src' => "/storage/$path"
            ];
        }
        return response()->json($result);
    }
}