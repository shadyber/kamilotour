<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'banner'

    ];


    public function Photo()
    {
        return $this->hasMany(Photo::class);
    }
}
