<?php

namespace App\Http\Controllers;

use App\Models\ChesterTrackerNotes;
use Illuminate\Http\Request;

class ChesterTrackerNotesController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChesterTrackerNotes  $chesterTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function show(ChesterTrackerNotes $chesterTrackerNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChesterTrackerNotes  $chesterTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function edit(ChesterTrackerNotes $chesterTrackerNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChesterTrackerNotes  $chesterTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChesterTrackerNotes $chesterTrackerNotes)
    {
       
        
        $validator = $request->validate([
            /** Tracker */

            'notes' => 'required'

        ]);


        $chesterTrackerNotes->update([
                
            'notes' => $request->notes
        ]);

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChesterTrackerNotes  $chesterTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChesterTrackerNotes $chesterTrackerNotes)
    {
        //
    }
}
