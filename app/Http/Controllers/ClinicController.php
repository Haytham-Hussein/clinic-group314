<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Doctor;



class ClinicController extends Controller
{
    public function clinicIndex(){

      $clinicMajor = Major::get();

      return view("clinic.index", compact("clinicMajor"));
    }

    public function ClinicLogIn(){

      return view("clinic.login");
    }

    public function ClinicMajors(){

      return view("clinic.majors");
    }

    public function ClinicContact(){

      return view("clinic.contact");
    }

    public function ClinicRegister(){

      return view("clinic.register");
    }
    
    public function ClinicDoctors(){

      return view("clinic.doctors.doctor");
    }

    public function ClinicDoctor(){

      $clinicDoctor = Doctor::get();

      return view("clinic.doctors.index", compact("clinicDoctor"));
    }
}
