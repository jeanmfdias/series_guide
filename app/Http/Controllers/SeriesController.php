<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        $series = [
            'Dr. House',
            'Modern Family',
        ];

        return view('series.index', compact('series'));
    }

    public function create(Request $request)
    {
        $titlePage = 'Create Serie';
        return view('series.create', compact('titlePage'));
    }

}
