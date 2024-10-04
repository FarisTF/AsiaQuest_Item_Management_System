<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemEditController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function __invoke(Item $item)
    {
        $categories = Category::listOfOptions();


        return view('items.edit', compact('item', 'categories'));
    }
}
