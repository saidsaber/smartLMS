<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image', 'is_active' , 'auther_id'];

    public function modules(){
        return $this->hasMany(Module::class);
    }

    public function user(){
        return $this->belongsTo(User::class , 'auther_id');
    }
}
