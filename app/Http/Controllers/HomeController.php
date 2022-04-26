<?php

namespace App\Http\Controllers;

use App\Models\ListingsType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index', [
            'listingTypes' => ListingsType::select('id', 'name')->get()
        ]);
    }
}
