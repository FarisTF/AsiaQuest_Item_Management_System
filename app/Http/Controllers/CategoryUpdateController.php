<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('category.index');
    }
}
