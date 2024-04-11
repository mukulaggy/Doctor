<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function save(Request $request){
        $patient=new Appointment([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'timings' => $request->get('timings'),

        ]);
        $patient->save();
        return redirect()->back();
    }
}

