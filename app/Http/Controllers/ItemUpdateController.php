<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreItemRequest $request, Item $item)
    {
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->image_url = $request->input('image_url');
        $item->stock_quantity  = $request->input('stock_quantity');
        $category = Category::find($request->input('category_id'));
        $category->items()->save($item);


        return redirect()->route('items.index');
    }
}
