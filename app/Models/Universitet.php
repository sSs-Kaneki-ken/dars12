<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitet extends Model
{
    use HasFactory;
    protected $table = "universitets";
    protected $fillable = [
        'name', 'phone_number'
    ];

    public function facultets(){
        return $this->hasMany(Facultet::class, 'universitet_id','id');
    }
}
