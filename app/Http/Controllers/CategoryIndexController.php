<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        //
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }
}
