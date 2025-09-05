<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index() {
        $resources = \App\Models\Resources::all();
        return view('resources.index', compact('resources'));
    }



    //
}
