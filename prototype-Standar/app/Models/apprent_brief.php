<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprent_brief extends Model
{
    use HasFactory;
    protected $table='briefs_apprants';
    public $timestamps = FALSE;
     protected $fillable=[
        "apprenant_id",
        "briefs_id",
    ];
}
