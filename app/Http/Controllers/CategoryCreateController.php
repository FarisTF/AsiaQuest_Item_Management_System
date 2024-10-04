<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryCreateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function __invoke()
    {
        return view('category.create');
    }
}
