<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'about',
        'mission',
        'vision',
        'goal',
        'background',
        'video',
        'value'

    ];

    public static function about(){
        return Address::orderBy('id', 'desc')->take(1)->get();
    }
}
