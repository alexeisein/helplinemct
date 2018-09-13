<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'about',
        'bed',
        'established',
        'achievment',
        'infrastructure',
        'slug'
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function blogs()
    {
    	return $this->hasMany(Blog::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

// OTHER HOSPITALS
    public function scopeOterHospitals($query)
    {
        return $query->inRandomOrder()->paginate(8);
    }
// SEARCH FOR HOSPITALS
    public function scopeSearchHospital($query, $search)
    {
        return $query->where('name', 'like', '%' .$search .'%');
    }
}
