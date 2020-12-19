<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class maController
{
    public function testEvent(Request $request)
    {
        $events = \App\maEvent::select('eventName', 'eventDescription', 'id')->get();
        $appointments = \App\maAppointment::select('user', 'appointmentDate', 'id')->get();
        return view('maevents', ['events' => $events, 'appointments' => $appointments, ]);
    }

    public function movieList(Request $request)
    {
        $events = \App\maEvent::find(1)->get();
        return view('maevents', ['events'=> $events]);
    }

    public function selectedMovie($id){
        $appointments = \App\maEvent::find($id)->appointments;
        return view('maappointments', ['data' => $appointments]);
    }

    public function reserveVisit(Request $request){
        $userName =  $request->input('nameInput');
        $id = $request->input('appointmentId');
        $appointments = \App\maAppointment::query()->where('id', $id)->update(['user' => $userName]);
        return back();
    }

}
