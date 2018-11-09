<?php

namespace FreeNation;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'cost',
        'travellers',
        'inpatient_duration',
        'outpatient_duration',
        'total_duration'
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
    	return $this->belongsToMany(Doctor::class)->withPivot('doctor_id', 'treatment_id');
    }
}
