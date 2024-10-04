<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image_url','price','stock_quantity'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function listOfOptions()
    {
        $list = self::all()->pluck('name', 'id');

        return $list;
    }
}
