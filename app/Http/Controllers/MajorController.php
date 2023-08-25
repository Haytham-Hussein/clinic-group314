<?php

namespace App\Http\Controllers;
use App\Models\Major;

use Illuminate\Http\Request;

class MajorController extends Controller
{
  public function MajorIndex()
  {

      $major = Major::get();

    return $major;
  }
}
