<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Comfort extends Model
{
    protected $fillable = ['name','hospital_id'];
    protected $table = 'comforts';

    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);
    }

    public function getNameAttribute($value)
    {
    	return ucwords($value);
    }
}
