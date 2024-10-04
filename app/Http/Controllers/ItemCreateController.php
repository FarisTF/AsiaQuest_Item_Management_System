<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ItemCreateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function __invoke(Request $request)
    {
        //
        $categories = Category::listOfOptions();

        return view('items.create', compact('categories'));
    }
}
