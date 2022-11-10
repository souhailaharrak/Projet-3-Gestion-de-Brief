<?php

namespace App\Http\Controllers;

use App\Models\Apparent;
use App\Models\Promotion;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {

    if($request->ajax()){
        $input = $request->key;
    $output="";
    $Promotion=Promotion::where('name','like','%'.$input."%")->get();

    foreach ($Promotion as $promotion) {
    $output.='<tr>

    <td>'.$promotion->name.'</td>
    <td>
    <a href="promotion.edit'.$promotion->id.'"><button class="btn btn-success" >Edit</button></a>
    <a href="promotion.destroy'.$promotion->name.'"><button type="sumbit" class="btn btn-danger">Delete</button></a>
    <td>
    </tr>';
    }
    return Response($output);
       }
       }

       public function searche(Request $request)
       {

       if($request->ajax()){
           $input = $request->key;
       $output="";
       $Promotion=Apparent::where('nom','like','%'.$input."%")->get();

       foreach ($Promotion as $promotion) {
       $output.='<tr>

       <td>'.$promotion->nom.'</td>
       <td>
       <a  href="promotion.edit'.$promotion->id.'"><button class="btn btn-success" >Edit</button></a>
       <a href="promotion.destroy'.$promotion->name.'"> <button type="sumbit" class="btn btn-danger">Delete</button></a>
       <td>
       </tr>';
       }
       return Response($output);
          }
          }

}
