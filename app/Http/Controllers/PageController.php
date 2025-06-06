<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('departure_time', 'asc')->get();
        return view('index', compact('trains'));
    }
}
