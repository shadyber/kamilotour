<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public static function lastN($n){
        return Product::orderBy('id', 'desc')->take($n)->get();
    }

    public static function popularN($n){
        return Product::orderBy('visit', 'desc')->take($n)->get();
    }
}
