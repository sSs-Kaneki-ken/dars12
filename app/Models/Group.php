<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $fillable = [
        "name", "lean_id", "course_id"
    ];

    public function leanings(){
        return $this->belongsTo(Leaning::class, "lean_id", "id");
    }

    public function course(){
        return $this->belongsTo(Course::class, "course_id", "id");
    }

    public function students(){
        return $this->hasMany(Student::class,"group_id", "id");
    }
}
