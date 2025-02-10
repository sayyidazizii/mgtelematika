<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $informations = Information::all();
        return view('home', compact('galleries', 'informations'));
    }
}
