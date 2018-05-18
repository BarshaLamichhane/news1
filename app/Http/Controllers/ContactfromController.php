<?php

namespace App\Http\Controllers;

use App\Contactfrom;
use Illuminate\Http\Request;
use Validator;

class ContactfromController extends Controller
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
       //$validator = $this->validate($contact,[
         /*  $validator = Validator::make($request->all(), [
            'contact'=>'required',
            'contact.*.name'=>'required|max:60',
            'contact.*.title'=>'required|max:255',
            'contact.*.company'=>'required|max:100',
            'contact.*.email'=>'required|max:60',
            'contact.*.phone'=>'required|min:10|max:15',
            'contact.*.subject'=>'required',
            'contact.*.Message'=>'required'
       ])->validate();*/
      
        $contact=new Contactfrom();
        $contact->Name=$request->contact['name'];
        $contact->Title=$request->contact['title'];
        $contact->Company=$request->contact['company'];
        $contact->Email=$request->contact['email'];
        $contact->Phone=$request->contact['phone'];
        $contact->Subject=$request->contact['subject'];
        $contact->Message=$request->contact['message'];
        if(!$contact->validate()){
            exit();
        }
        else{
            $contact->save();
            //Session::flash('message', 'Data inserted successfully');
        } 
       Session::flash('message', 'Data inserted successfully');   
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactfrom  $contactfrom
     * @return \Illuminate\Http\Response
     */
    public function show(Contactfrom $contactfrom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactfrom  $contactfrom
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactfrom $contactfrom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactfrom  $contactfrom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactfrom $contactfrom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactfrom  $contactfrom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactfrom $contactfrom)
    {
        //
    }
}
