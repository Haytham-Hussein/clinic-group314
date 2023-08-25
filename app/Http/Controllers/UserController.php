<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Major;

class UserController extends Controller
{
  public function UserIndex()
  {

      $user = User::get();

      return view("admin.user.index", compact("user"));
  }

  public function edit($id)
  {

      $user = User::findOrfail($id);
      return view("admin.user.edit", compact("user"));
  }

  public function update(Request $request, $id)
  {
      $validation = $request->validate([
          'name' => ['required', 'string', 'min:3', 'max:50', 'unique:users,name,' . $id]
      ]);
//        
      $user = User::findOrfail($id);
      $user->update(
          $request->all()
      );

      return redirect()->route('user.index')
          ->with("success", "user updated successfully");
  }

  public function delete($id)
  {

      $user = User::findOrfail($id);
      $user->delete();
      return back()
          ->with("success", "user deleted successfully");
  }


}
