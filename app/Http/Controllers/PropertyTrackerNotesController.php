<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\propertyTrackerNotes;
use Illuminate\Http\Request;

class PropertyTrackerNotesController extends Controller
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
        $validator = $request->validate([
            'property_tracker_id' => '',
            'file' => '',
            'description' => ''          
             ]);

        /** Auth User */
        $user = Auth::user();
        $user_id = $user->id;

     $note =   propertyTrackerNotes::create([
            'property_tracker_id' => $request->property_tracker_id,
            'user_id' => $user->id,
            'notes' => $request->notes,

        ]);

      

        $notification = array(
            'message' => 'lead note added successfully!',
            'alert-type' => 'success'
        );


        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\propertyTrackerNotes  $propertyTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function show(propertyTrackerNotes $propertyTrackerNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\propertyTrackerNotes  $propertyTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function edit(propertyTrackerNotes $propertyTrackerNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\propertyTrackerNotes  $propertyTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propertyTrackerNotes $propertyTrackerNotes)
    {
        $validator = $request->validate([
            /** Tracker */
            'notes' => 'required'
        ]);

         $note =   $propertyTrackerNotes->update([             
            'notes' => $request->notes
        ]);

        $notification = array(
            'message' => 'lead note updated successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\propertyTrackerNotes  $propertyTrackerNotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(propertyTrackerNotes $propertyTrackerNotes)
    {
        //
    }
}
