<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'location_id',
        'about',
        'bed',
        'image',
        'icu_bed',
        'established',
        'achievment',
        'infrastructure',
        'address',
        'slug'
    ];
// RELATIONSHIPS
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
        return $this->hasMany(Department::class);
    }

    public function comforts()
    {
        return $this->hasMany(Comfort::class);
    }

    public function money_matters()
    {
        return $this->hasMany(MoneyMatter::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function treatment_relateds()
    {
        return $this->hasMany(TreatmentRelated::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function transportations()
    {
        return $this->hasMany(Transportation::class);
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
