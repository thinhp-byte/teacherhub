<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index() {
        $resources = \App\Models\Resources::all();
        return view('resources.index', compact('resources'));
    }

    public function show($id)
    {
        // fetch the one article that is requested
        $resource = \App\Models\Resource::find($id);

        // send article to its view
        // return response
        return view('resources.show', compact('resourcee'));

    //
    }
}
