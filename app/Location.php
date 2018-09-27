<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
    	'city',
    	'state',
    	'country',
    	'slug'
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function hospitals()
    {
    	return $this->hasMany(Hospital::class);
    }

// Accessor
    public function getCityAttribute($city)
    {
        return ucwords($city);
    }
    public function getStateAttribute($state)
    {
        return ucwords($state);
    }
    public function getCountryAttribute($country)
    {
        return ucwords($country);
    }

    
}
