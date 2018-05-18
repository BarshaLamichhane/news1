<?php

namespace App\Http\Controllers;

use App\Topnews;
use Illuminate\Http\Request;

class TopnewsController extends Controller
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
        $news=new Topnews();
        $news->news_heading =$request->news['heading'];
        $news->news_body=$request->news['body'];
        if(!$news->validate()){
            return array("message" => "Failed");
        }
        else{
            $news->save();
            return array("message"  => "Success");
            //Session::flash('message', 'Data inserted successfully');
        } 
        
       
    }
    public function all(){
        return Topnews::all();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Topnews  $topnews
     * @return \Illuminate\Http\Response
     */
    public function show(Topnews $topnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topnews  $topnews
     * @return \Illuminate\Http\Response
     */
    public function edit(Topnews $topnews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topnews  $topnews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topnews $topnews)
    {
        $newss=new Topnews();
        $newss->news_heading =$request->newss['heading'];
        $newss->news_body=$request->newss['body'];
        $newss->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topnews  $topnews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topnews $topnews)
    {
        if($topnews->delete()){
            return array("message" => "deleted");
        }else{
            return array("message" => "notdeleted");
        }
    }
}
