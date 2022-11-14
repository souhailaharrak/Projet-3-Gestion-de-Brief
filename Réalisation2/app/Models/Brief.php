<?php

namespace App\Models;
use App\Models\Taches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable = [
        'name',
        'livraisonDate',
        'recuperationDate'
    ];

    public function taches(){
        return $this->hasMany(Tache::class);
    }


    public function apprent(){
        return $this->belongsToMany(Apparent::class,'briefs_apprants','briefs_id','apprenant_id');
    }
}
