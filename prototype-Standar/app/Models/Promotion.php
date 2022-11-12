<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    protected $table = "promotions";
    protected $fillable = ['name'];
    public function apparents(){
    return $this->hasMany(Apparent::class);
    }
}
