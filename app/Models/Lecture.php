<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['module_id' , 'name' , 'description'];

    public function modules(){
        return $this->belongsTo(Module::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }
}
