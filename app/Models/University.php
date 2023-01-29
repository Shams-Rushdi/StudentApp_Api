<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function universities()
    {
        return $this->belongsTo(University::class);
    }

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }

    public function scholarship()
    {
        return $this->hasManyThrough(Scholarship::class, University::class, 'parent_id', 'university_id', 'id');
        //return  $this->hasMany(Scholarship::class);
    }

}
