<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AppointmentController extends Controller
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
            'assigned_to' => '',
            'property_tracker_id' => '',
            'timezone' => '',
            'start_date' => '',
            'time' => '',
            'type' => '',
            'subject' => '',
            'notes' => ''          
             ]);
           

        /** Auth User */
        $user = Auth::user();
        $user_id = $user->id;
        
        $appointment = appointment::create([
            'created_by'=> $user_id,
            'updated_by'=> $user_id,
            'assigned_to'=>$request->assigned_to,
            'property_tracker_id' => $request->property_tracker_id,
            'timezone' => $request->timezone,
            'start_date' => $request->start_date,
            'time' => $request->time,
            'type' => $request->type,
            'subject' => $request->subject,
            'notes' => $request->notes
        ]);


        $notification = array(
            'message' => 'El elemento se guardo con exito.',
            'alert-type' => 'success'
        );


        return back()->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        //
    }
}
