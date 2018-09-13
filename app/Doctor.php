<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'title',
        'about',
        'experience',
        'education',
        'awards',
        'photo',
        'slug',
        'dicipline',
        'gender',
    ];

    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }

    public function specialities()
    {
    	return $this->belongsToMany(Speciality::class);
    }

    public function treatments()
    {
    	return $this->belongsToMany(Treatment::class);
    }

    public function scopeOtherDoctors($query)
    {
        return $query->inRandomOrder()->paginate(12);
    }

    // Search for Doctors by name
    public function scopeDoctorsByName($query, $string)
    {
        return $query->where('name', 'like', '%' .$string .'%')
            ->orWhere('title', 'like', '%' .$string .'%');
    }
}
