<?php

namespace App\Http\Controllers;

use App\vacancypost;
use Illuminate\Http\Request;

class VacancypostController extends Controller
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
        $vacancy=new vacancypost();
        $vacancy->vname=$request->vacancy['name'];
        $vacancy->vpost=$request->vacancy['post'];
        $vacancy->vbimage=$request->vacancy['pic'];

        if($request->hasFile('bimage')){
            $destinationpath='images';
            $vacancy->vbimage->move($destinationpath, $vacancy->vbimage->getClientOriginalName());
        }
    
        $vacancy->save();
        if($vacancy->save()){
            return array("message" => "Success");
        }
        else{
            return array("message"  => "Failed");
            //Session::flash('message', 'Data inserted successfully');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vacancypost  $vacancypost
     * @return \Illuminate\Http\Response
     */
    public function show(vacancypost $vacancypost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vacancypost  $vacancypost
     * @return \Illuminate\Http\Response
     */
    public function edit(vacancypost $vacancypost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vacancypost  $vacancypost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vacancypost $vacancypost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vacancypost  $vacancypost
     * @return \Illuminate\Http\Response
     */
    public function destroy(vacancypost $vacancypost)
    {
        //
    }
}
