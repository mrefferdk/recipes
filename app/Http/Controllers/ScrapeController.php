<?php

namespace App\Http\Controllers;

use App\Http\Services\UserHashService;

class ScrapeController extends Controller
{
    public function index()
    {
        return view('scrape.dashboard', [
            'userId' => Auth()->user()->id,
            'userIdHash' => UserHashService::getUserHash(),
        ]);
    }
}
