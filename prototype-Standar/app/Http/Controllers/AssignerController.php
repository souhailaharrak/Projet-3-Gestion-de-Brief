<?php

namespace App\Http\Controllers;
use App\Models\Apparent;
use App\Models\apprent_brief;
use App\Models\Brief;
use Illuminate\Http\Request;

class AssignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$apprenant = Apparent::all();
        return view('brief.assigner', compact('apprenant', $apprenant));
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
        apprent_brief::create([
            'apprenant_id' => $request->apprenant_id,
            'briefs_id' => $request->briefs_id,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apprenant = Apparent::all();
        $ApprenantAssinger = Brief::find($id);


        return view('brief.assigner',compact('apprenant','ApprenantAssinger','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        apprent_brief::where([
            ['apprenant_id',$request->apprenant_id],
            ['brief_id',$request->briefs_id]
            ])->delete();
            return back();
    }
}
