<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CocktailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $cocktails = Cocktail::with('ingredients', 'recipes')->get();

        return response()->json($cocktails);
    }

    public function get($url, Request $request)
    {
        $cocktail = Cocktail::where('url', $url)->with('ingredients', 'recipes')->first();

        return response()->json($cocktail);
    }
}
