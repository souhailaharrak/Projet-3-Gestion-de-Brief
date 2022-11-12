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

     
    public function verifier($idap,$brf)
    {
        $i=0;
        $apbr= apprent_brief::where('apprenant_id',$idap)->where('briefs_id',$brf)->first();
        if(!is_null($apbr)){
            $i=1;
        }


        return $i;


    }

}
