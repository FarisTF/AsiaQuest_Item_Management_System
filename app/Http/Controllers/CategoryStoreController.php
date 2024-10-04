<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryStoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('category.index');
    }
}
