<?php

namespace App\Http\Controllers\DoctorList;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Section;


class DoctorListController extends Controller
{
    public function index(){

        $sections = Section::with('doctors')->get();
        $doctors = Doctor::with('image')->with('section')->get();

        return view('/welcome',compact('sections','doctors'));
    }

    public function show($id)
    {
        $doctorsList =Doctor::where('id',$id)->get();
        return view('Website.doctors.doctorInfo',compact('doctorsList'));
    }



}
