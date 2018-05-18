<?php

namespace App\Http\Controllers;

use App\googlemap;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class GooglemapController extends Controller
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
        $client=new \GuzzleHttp\Client();
        $res=$client->request('GET', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBiZc36T3hn59gtl44wax471AE6ry-lSYM ');
        return $res->getBody();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\googlemap  $googlemap
     * @return \Illuminate\Http\Response
     */
    public function show(googlemap $googlemap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\googlemap  $googlemap
     * @return \Illuminate\Http\Response
     */
    public function edit(googlemap $googlemap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\googlemap  $googlemap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, googlemap $googlemap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\googlemap  $googlemap
     * @return \Illuminate\Http\Response
     */
    public function destroy(googlemap $googlemap)
    {
        //
    }
}
