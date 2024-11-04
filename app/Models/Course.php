<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = [
        'name'
    ];

    public function groups(){
        return $this->hasMany(Group::class, 'course_id','id');
    }
}
