<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinger extends Model
{
    use HasFactory;
    public $table= "briefs_apprants";
    public $timestamps= false;
}
