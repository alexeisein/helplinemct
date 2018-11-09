<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'description',
        'slug'
    ];

    public function pictures()
    {
    	return $this->hasMany(Picture::class);
    }
}
