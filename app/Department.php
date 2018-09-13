<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo',
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
}
