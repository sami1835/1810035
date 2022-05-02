<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    //Create Profile 
    public function userprofile(){
        return view('userprofile.profile'); 
    }
 
    // User profile edit 
    public function userprofileedit($id){
         $users = User::find($id);
         return view('userprofile.profileedit', compact('users')); 
    }
 
    public function userprofileupdate(Request $request,$id){
     $validatedData = $request->validate([
         'name' => 'required|max:255',
         'phone' => 'required|max:255',
         'city' => 'required|max:255',
         'country' => 'required|max:255',
     ],
 
     [
         'name.required' => 'Username is required',
         'phone.required' => 'Mobile No is required',
         'city.required' => 'City is required',
         'country.required' => 'Country is required',
     ]);
 
         User::find($id)->update([
             'name' => $request->name,
             'phone' => $request->phone,
             'city' => $request->city,
             'country' => $request->country,
         ]); 
         Return Redirect()->route('user.profile')->with('success', 'Successfully Updated'); 
    }

    // change password 
        public function changepass(){
        return view('userprofile.password'); 
    }

// Update password 
public function updatepass(Request $request){
    $id = Auth::user()->id; 
    $db_pass = Auth::user()->password;
    $old_pass = $request->old_password;
    $new_pass = $request->new_password;
    $confirm_pass = $request->confirm_password;

    $validatedData = $request->validate([
        'old_password' => 'required|max:255',
        'new_password' => 'required|max:255',
    ],

    [
        'old_password.required' => 'The field is required',
        'new_password.required' => 'The field is required',
    ]);

    if (Hash::check($old_pass,$db_pass)) {
        if ($new_pass == $confirm_pass) {
            User::find($id)->update([
                'password' => Hash::make($request->new_password), 
            ]);
            Auth::logout(); 
            Return Redirect()->route('login'); 
        }
        else{
         Return Redirect()->back()->with('error2','New & Confirm Password is not matched');
        }
    }
    else{
         Return Redirect()->back()->with('error1','Invalid Old Password'); 
    }
}

 

}
