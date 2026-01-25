<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['legth' , 'path' , 'lecture_id'];

    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }
}
