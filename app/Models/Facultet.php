<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultet extends Model
{
    use HasFactory;
    protected $table = "facultets";
    protected $fillable = [
        "name",
        "universitet_id"
    ];

    public function universitets()
    {
        return $this->belongsTo(Universitet::class, "universitet_id", "id");
    }
    public function leanings()
    {
        return $this->hasMany(Leaning::class, "facultet_id", "id");
    }
}
?>