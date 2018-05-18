<?php

namespace App\Http\Controllers;

use App\CalendarOperation;
use Illuminate\Http\Request;

class CalendarOperationController extends Controller
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
       $calendardata=new CalendarOperation();
       $calendardata->Month=$request->calendardata['month']; 
       $calendardata->days=$request->calendardata['day'];
       $calendardata->weeks=$request->calendardata['week'];
       $calendardata->years=$request->calendardata['year']; 
       $calendardata->save();

    }
    public function all(){
        return CalendarOperation::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CalendarOperation  $calendarOperation
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarOperation $calendarOperation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalendarOperation  $calendarOperation
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarOperation $calendarOperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalendarOperation  $calendarOperation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarOperation $calendarOperation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalendarOperation  $calendarOperation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarOperation $calendarOperation)
    {
        //
    }
}
