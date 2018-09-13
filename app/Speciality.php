<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo',
        'slug',
    ];
    
    public function doctors()
    {
    	return $this->belongsToMany(Doctor::class);
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }
}
