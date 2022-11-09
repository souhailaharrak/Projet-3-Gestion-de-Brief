<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table = "taches";
    protected $fillable = [

        'name',
        'startDate',
        'endDate',
        'description',
        'brief_id'
    ];

}
