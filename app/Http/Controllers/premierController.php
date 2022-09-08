<?php

namespace App\Http\Controllers;

use App\Models\premier;
use Illuminate\Http\Request;

class premierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('service');
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
     * @param  \App\Models\premier  $premier
     * @return \Illuminate\Http\Response
     */
    public function show(premier $premier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\premier  $premier
     * @return \Illuminate\Http\Response
     */
    public function edit(premier $premier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\premier  $premier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, premier $premier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\premier  $premier
     * @return \Illuminate\Http\Response
     */
    public function destroy(premier $premier)
    {
        //
    }
}
