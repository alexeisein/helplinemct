<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo',
        'slug',
    ];


// This tells laravel to use slug column instead of id for show method in treatment.
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

    public function doctors()
    {
    	return $this->belongsToMany(Doctor::class);
    }
}
