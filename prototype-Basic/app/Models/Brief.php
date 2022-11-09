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

    public function Tache(){

      return  $this->hasMany(Tache::class);
    }
}
