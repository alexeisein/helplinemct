<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'comfort',
        'money_matters',
        'travellers',
        'food',
        'treatment',
        'language',
        'transport',
        'photo',
        'slug'
    ];

    public function hospitals()
    {
    	return $this->belongsToMany(Hospitals::class);
    }
}
