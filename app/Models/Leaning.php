<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaning extends Model
{
    use HasFactory;
    protected $table = "leanings";
    protected $fillable = [
        'name', 'facultet_id'
    ]; 

    public function facultets(){
        return $this->belongsTo(Facultet::class, "facultet_id", "id");
    }

    public function groups(){
        return $this->hasMany(Group::class,"lean_id","id");
    }
}
