<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $foodFromDB = Food::all();



        return view('recipes.index', ['foods' => $foodFromDB]);
    }

}
