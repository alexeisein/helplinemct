<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'hospital_id',
        'description',
        'image',
        'slug',
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
}
