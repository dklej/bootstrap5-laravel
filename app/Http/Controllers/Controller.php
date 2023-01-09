<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendJsonData()
    {
        //$json_data = file_get_contents(storage_path('app/public/books.json'), true); //alternetywa
        $json_data = Storage::disk('public')->get('books.json');
        $json_data = json_decode($json_data, true)["books"];

        return view('index', compact('json_data'));
    }
}
