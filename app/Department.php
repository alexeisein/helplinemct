<?php

namespace Hmct;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function hospitals()
    {
    	return $this->belongsToMany(Hospital::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
}
