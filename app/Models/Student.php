<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'name', 'phone', 'image',
        'group_id', 'address_id'
    ];

    public function groups(){
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function students(){
        return $this->belongsTo(Student::class,'address_id','id');
    }
}
