<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apparent extends Model
{
    use HasFactory;

    protected $table="apprents";
    protected $fillable=["promotion_id","email","nom","prenom"];

    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }
    public function Brief(){
        return $this->belongsToMany(Brief::class,'briefs_apprants');
    }
}
