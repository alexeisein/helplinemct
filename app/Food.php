<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
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
