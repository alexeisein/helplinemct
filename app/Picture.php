<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'title',
        'description',
        'slug'
    ];

    public function album()
    {
    	return $this->belongsTo('FreeNation\Album');
    }
}
