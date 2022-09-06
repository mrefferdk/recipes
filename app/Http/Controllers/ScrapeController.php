<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class ScrapeController extends Controller
{
    public function index()
    {
        return view('scrape.dashboard');
    }
}
