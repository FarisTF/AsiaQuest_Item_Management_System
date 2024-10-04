<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemDeleteController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function __invoke(Item $item)
    {
        //
        $item->delete();

        return redirect()->route('items.index');
    }
}
