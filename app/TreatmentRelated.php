<?php

namespace Hmct;

use Illuminate\Database\Eloquent\Model;

class TreatmentRelated extends Model
{
	protected $table = 'treatment_relateds';
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
