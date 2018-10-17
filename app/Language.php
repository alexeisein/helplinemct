<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name','hospital_id'];

    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);
    }

    public function getNameAttribute($value)
    {
    	return ucwords($value);
    }
}
