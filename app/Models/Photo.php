<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [
        'title',
        'detail',
        'photo',
        'thumb',
        'album_id',
        'slug'

    ];


    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

   public function Album()
    {
        return $this->belongsTo(Album::class);
    }
}
