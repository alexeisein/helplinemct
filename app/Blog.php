<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'body',
        'slug'
    ];

    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
