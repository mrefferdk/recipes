<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Clio\ContentfulClient\Client;

class ContentfulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Client $contentfulClient)
    {
        $entryId = request('entryId');

        $article = $contentfulClient->previewClient->getEntry($entryId);

        return view('contentful.preview', compact('article'));
    }

}
