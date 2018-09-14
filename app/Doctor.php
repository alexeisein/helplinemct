<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'years_experience',
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
            ->orWhere('years_experience', $string);
    }

    public function getNameAttribute($value)
    {
        $name = strstr($value, ' ', true); //returns first string of name
        $titles = ["prof.", "dr."];

        // Get random title between doc and prof
        $randTitle = rand(0,1);
        if ($randTitle == 0) {
            $randTitle = "prof.";
        }else{
            $randTitle = "dr.";
        }

        // Check if first string above is in array
        if (in_array($name, $titles)) {
            return $value;
        }else{
            return ucfirst($randTitle) .' ' .strstr($value, ' ');
        }
    }
}
