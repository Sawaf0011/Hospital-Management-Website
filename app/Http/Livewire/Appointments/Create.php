<?php

namespace App\Http\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor;
    public $section;
    public $name;
    public $email;
    public $phone;
    public $appointment;
    public $notes;
    public $message= false;
    public $appointment_patient;
    public $message2= false;
    public $message3 = false;

    public function mount(){

        $this->sections = Section::get();
        $this->doctors = collect();

    }

    public function render()
    {
        return view('livewire.appointments.create',
            [
                'sections' => Section::get()
            ]);
    }

    public function updatedSection($section_id){

        $this->doctors = Doctor::where('section_id',$section_id)->get();
    }

    public function store(){


        $appointment_count = Appointment::where('doctor_id', $this->doctor)->where('type', 'Not Confirmed')->where('appointment_patient', $this->appointment_patient)->count();
        $doctor_info = Doctor::find($this->doctor);

        if ($appointment_count == $doctor_info->number_of_statements) {
            $this->message2 = true;
            return back();
        }


        $emailExists = Appointment::where('email', $this->email)->where('appointment',$this->appointment)->exists();

        if ($emailExists) {
            $this->message3 = true;
            return back();
        }


        $appointments = new Appointment();
        $appointments->doctor_id = $this->doctor;
        $appointments->section_id = $this->section;
        $appointments->name = $this->name;
        $appointments->email = $this->email;
        $appointments->phone = $this->phone;
        $appointments->appointment_patient = $this->appointment_patient;
        $appointments->notes = $this->notes;
        $appointments->save();
        $this->message =true;

    }



}