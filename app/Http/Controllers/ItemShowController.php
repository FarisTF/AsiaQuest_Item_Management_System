<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemShowController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function __invoke(Item $item)
    {
        //
        return view('items.show', compact('item'));
    }
}
