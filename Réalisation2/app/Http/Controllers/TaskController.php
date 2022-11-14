<?php

namespace App\Http\Controllers;
use App\Models\Brief;


use Illuminate\Http\Request;
use App\Models\Tache;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->brief_id;
        $taches= Brief::find($id)->taches;

        return view("tache.index", compact("taches","id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->brief_id;

        return view("tache.create",compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tache = new Tache();
        $tache->name= $request->name;
        $tache->startDate= $request->startDate;
        $tache->endDate= $request->endDate;
        $tache->description= $request->description;
        $tache->brief_id= $request->brief_id;
        $tache->save();
        return back();
        // return redirect('brief/'.$request->brief_id .'/edit');
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
    public function edit($id)
    {
        $tache = Tache::find($id);
        $brief_id = $tache->brief_id;
        return view("tache.edit",compact("tache","brief_id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([

            'name'=>'required',
          ]);
          $tache =Tache::find($id);
          $tache->name= $request->name;
          $tache->startDate= $request->startDate;
          $tache->endDate= $request->endDate;
          $tache->description= $request->description;

          $tache->save();
         // $tache->update($request->all());
          return redirect()->route('brief.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tache $tache)
    {
        $tache->delete();
        return redirect()->route('brief.edit',$tache->id);
    }
}
