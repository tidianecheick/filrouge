<?php

namespace App\Http\Controllers;

use App\Models\mespage;
use Illuminate\Http\Request;

class mespageController extends Controller
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
     * @param  \App\Models\mespage  $mespage
     * @return \Illuminate\Http\Response
     */
    public function show(mespage $mespage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mespage  $mespage
     * @return \Illuminate\Http\Response
     */
    public function edit(mespage $mespage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mespage  $mespage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mespage $mespage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mespage  $mespage
     * @return \Illuminate\Http\Response
     */
    public function destroy(mespage $mespage)
    {
        //
    }
}
