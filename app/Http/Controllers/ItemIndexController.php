<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemIndexController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $items = Item::all();

        return view('items.index', compact('items'));
    }
}
