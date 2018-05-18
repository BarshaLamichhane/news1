<?php

namespace App\Http\Controllers;

use App\Pigeon;
use Illuminate\Http\Request;

class PigeonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pigeon');
    }


    public function paged(){
        return  Pigeon::paginate(10);
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
     * @param  \App\Pigeon  $pigeon
     * @return \Illuminate\Http\Response
     */
    public function show(Pigeon $pigeon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pigeon  $pigeon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pigeon $pigeon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pigeon  $pigeon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pigeon $pigeon)
    {
        //
        $pigeon->name = $request->name;
        $pigeon->country = $request->country;
        $pigeon->color = $request->color;
        if($pigeon->save()){
            //updated 
        }else{
            //unupdated
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pigeon  $pigeon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pigeon $pigeon)
    {
        //
    }
}
