<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Shop;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $results = Country::withCount('shops')->get();

        return view('shop', compact('results'));
    }

    public function getShoppingCentre()
    {
        $shopping = Shop::with('country')->get();

        return view('shopping', compact('shopping'));
    }
}
