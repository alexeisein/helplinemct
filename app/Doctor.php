<?php

namespace Hmct;
use Hmct\Department;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'hospital_id',
        'location_id',
        'department_id',
        'name',
        'years_experience',
        'about',
        'experience',
        'education',
        'awards',
        'image',
        'slug',
        'descipline',
        'gender',
    ];

// DEFINE RELATIONSHIPS
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

// GET OTHER DOCTORS
    public function scopeOtherDoctors($query)
    {
        return $query->inRandomOrder()->paginate(12);
    }

// Search for Doctors by name
    public function scopeDoctorsByName($query, $docName)
    {
        return $query->where('name', 'like', '%'.$docName.'%')
            ->orWhere('years_experience', $docName);
    }

    // public function scopeDoctorsByDept($query, $dept)
    // {
    //     return $query->where('id', '=', $dept);
    // }

// Function for ucwords for education
    public function ucwordsField($value)
    {
        return ucwords($value);
    }

// another method. but at view, Hmct\Doctor::ucwordsField($edu)
    // public static function ucwordsField($edu)
    // {
    //     return ucwords($edu);
    // }

// SORT DOCTORS BY YEARS OF EXPERIENCE
    public function scopeFiveYears($query)
    {
        return $query->where('years_experience', '<=', 5);
    }
    public function scopeSixYears($query)
    {
        return $query->whereBetween('years_experience', [5, 11]);
    }
    public function scopeTwelveYears($query)
    {
        return $query->whereBetween('years_experience', [12, 17]);
    }

    public function scopeEighteenYears($query)
    {
        return $query->whereBetween('years_experience', [18, 23]);
    }

    public function scopeTwentyFourYears($query)
    {
        return $query->whereBetween('years_experience', [24, 29]);
    }

    public function scopeThirtyYears($query)
    {
        return $query->whereBetween('years_experience', [30, 35]);
    }

    public function scopeThirtySixYears($query)
    {
        return $query->whereBetween('years_experience', [36, 41]);
    }

    public function scopeFourtyTwoYears($query)
    {
        return $query->whereBetween('years_experience', [42, 47]);
    }

    public function scopeFourtyEightYears($query)
    {
        return $query->whereBetween('years_experience', [48, 53]);
    }

    public function scopeFiftyFourYears($query)
    {
        return $query->whereBetween('years_experience', [54, 59]);
    }

    public function scopeSixtyYears($query)
    {
        return $query->whereBetween('years_experience', [60, 65]);
    }

    public function scopeUpdatedAt($query)
    {
        return $query->whereDate('updated_at', date('y-m-d'))->get();
    }

}
