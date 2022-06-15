<?php

namespace App\Http\Controllers;

use App\Models\OnceHub;
use Illuminate\Http\Request;

class OnceHubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $route_active = 'manage_lead';

      //  dd($request->acId);
        return view('crm.chester.oncehub', compact('route_active'));
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
     * @param  \App\Models\OnceHub  $onceHub
     * @return \Illuminate\Http\Response
     */
    public function show(OnceHub $onceHub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnceHub  $onceHub
     * @return \Illuminate\Http\Response
     */
    public function edit(OnceHub $onceHub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnceHub  $onceHub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnceHub $onceHub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnceHub  $onceHub
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnceHub $onceHub)
    {
        //
    }
}
