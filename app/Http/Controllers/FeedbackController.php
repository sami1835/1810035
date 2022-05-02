<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //................................................User Part.............................................//
    
    // View feedback or complain form 
    public function feedback(){
        return view('feedback.feedback'); 
    }

    // Submit feedback or complain form 
    public function feedback_submit(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:255',
            'address' => 'required|max:255',
            'message' => 'required|max:255',
        ]); 
        Feedback::insert([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'message' => $request->message,
            
        ]);
        Return Redirect()->route('feedback_complain')->with('success', 'Thanks for your Feedback or Complain.'); 
    }  

}
