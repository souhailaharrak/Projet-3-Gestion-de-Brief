<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Apparent;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function indexx(){
        return 'hellpo';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions=Promotion::latest()->paginate(10);
       return view('promotion.index',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('promotion.create');
    }



    public function store(Request $request)
    {
        //dd($request->name);

        $request->validate([

               'name'=>'required',

        ]);
        $promotion = new Promotion();
        $promotion->name=$request->name;
        $promotion->save();
        if(isset($request->email)){
            foreach($request->nom as $key => $value){
                $promotion->apparents()->create([
                    "promotion_id"=>$promotion->id,
                    "email"=>$request->email[$key],
                    "nom"=>$request->nom[$key],
                    "prenom"=>$request->prenom[$key],
                ]);
            }

        }

        return redirect()->route('promotion.index')->with('success','added successefly');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('promotion.edit',compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([

            'name'=>'required',



     ]);


     $promotion->name=$request->name;
     $promotion->save();
     if(isset($request->email)){
         foreach($request->nom as $key => $value){
             $promotion->apparents()->create([
                 "promotion_id"=>$promotion,
                 "email"=>$request->email[$key],
                 "nom"=>$request->nom[$key],
                 "prenom"=>$request->prenom[$key],
             ]);

            }
        return redirect()->route('promotion.index')->with('suc','successefly');
        }



     return redirect()->route('promotion.index')->with('success','updated successefly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotion.index')->with('success','delete successefly');
    }

    public function show($id)
    {

    $apprent=Apparent::where('promotion_id',$id)->paginate(10);

    return view('promotion.show',compact('apprent'));

    }

    public function lesbriefsdecettepromotion($id){

        //$briefs=Apparent::Where('promotion_id',$id)->Brief->get();
        $promotion=$id;
        $briefs=DB::table('briefs')->join('briefs_apprants','briefs.id','briefs_apprants.briefs_id')
                    ->join('apprents','apprents.id','briefs_apprants.apprenant_id')->where('apprents.promotion_id',$id)
                    ->get();
        //dd($briefs);
        return view('promotion.briefs',compact('briefs','promotion'));
    }
}

