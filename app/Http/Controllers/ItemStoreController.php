<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ItemStoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(Request $request)
    {
        $category = Category::find($request->input('category_id'));

        $category->items()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'stock_quantity'  => $request->stock_quantity,
        ]);

        return redirect('/items');
    }
}
