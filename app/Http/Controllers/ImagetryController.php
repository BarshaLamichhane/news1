<?php

namespace App\Http\Controllers;

use App\imagetry;
use Illuminate\Http\Request;

class ImagetryController extends Controller
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
        $imagetry=new imagetry();
        $imageName= uniqid().time().'.'.$request->inputImage->getClientOriginalExtension();
        $request->inputImage->move(public_path('images'),$imageName);
        $imagetry->vbimage =$request->ctrln.'/'.$imageName;
       // $imagetry->type ='image';
        $imagetry->save();
        return $imagetry;
    }























    
    /**
     * Display the specified resource.
     *
     * @param  \App\imagetry  $imagetry
     * @return \Illuminate\Http\Response
     */
    public function show(imagetry $imagetry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imagetry  $imagetry
     * @return \Illuminate\Http\Response
     */
    public function edit(imagetry $imagetry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imagetry  $imagetry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imagetry $imagetry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imagetry  $imagetry
     * @return \Illuminate\Http\Response
     */
    public function destroy(imagetry $imagetry)
    {
        //
    }
}
