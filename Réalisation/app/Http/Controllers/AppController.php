<?php

namespace App\Http\Controllers;



use App\Models\Apparent;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apparent  $app
     * @return \Illuminate\Http\Response
     */
    public function show(Apparent $app)
    {
        //
    }


    public function edit($id)
    {
        $apprent = Apparent::where('promotion_id', $id)->first();


        return view('apprent.edit',compact('apprent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apparent  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',

        ]);


       Apparent::where("id",$id)->update([
            "nom" => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);

        $apprent = Apparent::find($id);

        return redirect()->route('promotion.show', $apprent->promotion_id)->with("succes","promotion has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apparent $apprent)
    {

        $apprent->delete();
        return redirect()->route('promotion.index')->with('success','delete successefly');
    }
}
