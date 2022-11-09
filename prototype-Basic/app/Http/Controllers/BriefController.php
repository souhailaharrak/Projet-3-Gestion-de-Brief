<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Tache;


use Illuminate\Http\Request;



class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brief = Brief::all();
        return view("brief.index",compact("brief"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("brief.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

          'name'=>'required',
        ]);
        // Tache::create([
        //     "name"=>$request->name,
        //     "startDate"=>$request->startDate,
        //     "endDate"=>$request->endDate,
        //     "description"=>$request->description,
        //     "brief_id"=>$request->brief_id,

        // ]);
        $brief=Brief::create($request->all());
        return redirect()->route('brief.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brief $brief)
    {
        $tache = Tache::all();
        return view("brief.edit",compact('brief','tache'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brief $brief)
    {
        $request->validate([

            'name'=>'required',
          ]);
          $brief->update($request->all());
          return redirect()->route('brief.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brief $brief)
    {

        $brief->delete();
        return redirect('brief');

    }
    public function add_tache($id){

        $brief= Brief::find($id);
        return view('tache.create')->with([
            "brief"=>$brief
        ]);
    }
}
