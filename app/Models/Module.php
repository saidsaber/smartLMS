<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['course_id' , 'name'];

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }
}
