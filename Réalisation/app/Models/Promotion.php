<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    protected $table = "promotions";
    protected $fillable = ['name'];
    public function apparents(){
        return Apparent::where('promotion_id',1)->all();
    //return $this->hasMany(Apparent::class);
    }
}
