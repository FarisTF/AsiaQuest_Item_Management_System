<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
    public static function listOfOptions()
    {
        $list = self::all()->pluck('name', 'id');

        return $list;
    }
}
