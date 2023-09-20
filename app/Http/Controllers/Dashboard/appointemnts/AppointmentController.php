<?php

namespace App\Http\Controllers\Dashboard\appointemnts;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirmation;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;

class AppointmentController extends Controller
{
    public function index(){

        $appointments = Appointment::where('type','Not Confirmed')->get();
        return view('Dashboard.appointments.index',compact('appointments'));
    }

    public function index2(){

        $appointments = Appointment::where('type','Confirmed')->get();
        return view('Dashboard.appointments.index2',compact('appointments'));
    }

    public function approval(Request $request,$id){
        $appointment = Appointment::findorFail($id);
        $appointment->update([
            'type'=>'Confirmed',
            'appointment'=>$request->appointment,
        ]);

//        Mail::to($appointment->email)->send(new  AppointmentConfirmation($appointment->name,$appointment->appointment));

//        $receiverNumber = $appointment->phone;
//        $message = 'Dear patient  '. $appointment->name. '' . 'your appointment has been booked at '. $appointment->appointment;
//
//         $account_sid = getenv("TWILIO_SID");
//            $auth_token = getenv("TWILIO_TOKEN");
//            $twilio_number = getenv("TWILIO_FROM");
//
//             $client = new Client($account_sid, $auth_token);
//             $client->messages->create($receiverNumber,[
//                 'from'=>$twilio_number,
//                 'body'=>$message
//             ]);

        session()->flash('add');
        return back();
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        session()->flash('delete');
        return back();
    }

}
