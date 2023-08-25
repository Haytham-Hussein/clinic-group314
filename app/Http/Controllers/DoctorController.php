<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Major;

class DoctorController extends Controller
{
  public function DoctorIndex()
  {

      $doctor = Doctor::get();
      $major = Major::get();
      
      return view("admin.doctor.index", compact("doctor", "major"));
  }

  public function edit($id)
  {
      $major = Major::get();
      $doctor = Doctor::findOrfail($id);
      return view("admin.doctor.edit", compact("doctor", "major"));
  }

  public function update(Request $request, $id)
  {
      $validation = $request->validate([
          'name' => ['required', 'string', 'min:3', 'max:50', 'unique:doctors,name,' . $id]
      ]);
//        
      $doctor = Doctor::findOrfail($id);
      $doctor->update(
          $request->all()
      );

      return redirect()->route('doctor.index')
          ->with("success", "Doctor updated successfully");
  }

  public function delete($id)
  {

      $doctor = Doctor::findOrfail($id);
      $doctor->delete();
      return back()
          ->with("success", "Doctor deleted successfully");
  }
}
