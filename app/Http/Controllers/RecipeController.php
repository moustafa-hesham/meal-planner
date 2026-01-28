<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $foods = [
            [
                'category' => 'Dinner',
                'title' => 'Balady Bread (Whole wheat pita)',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdWrZvzeL8wm8S1v7hbiIbWxrO1Va1bniWKQ&s',
                'is_favorite' => false,
            ],
            [
                'category' => 'Lunch',
                'title' => 'Brown Toast (Whole wheat bread)',
                'image' => 'https://picsum.photos/seed/toast/800/500',
                'is_favorite' => true,
            ],
        ];

        return view('recipes.index', compact('foods'));
    }

}
