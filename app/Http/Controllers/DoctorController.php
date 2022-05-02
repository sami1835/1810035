<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Doctor1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class DoctorController extends Controller
{
    //.........................................User Doctor part..............................................//
    public function ualldocs(){
        $docs = Doctor::paginate(5);
        return view('serialdoctor.ualldoc',compact('docs')); 
    }

    public function alldoctor(){
        $docs = Doctor::paginate(6);
        return view('serialdoctor.alldoctor',compact('docs')); 
    }

    public function serialdoc($id){
        $docs = Doctor::find($id); 
        return view('serialdoctor.serial1', compact('docs')); 
    }

    // Patient serial 
    public function serial(Request $request){
        $validatedData = $request->validate([
            'patient_name' => 'required|max:255',
            'age' => 'required|max:255',
            'date' => 'required|max:255',
            'doctor_name' => 'required|max:255',
        ]); 
        Doctor1::insert([
            'patient_name' => $request->patient_name,
            'age' => $request->age,
            'date' => $request->date,
            'doctor_name' => $request->doctor_name,
        ]);
        Return Redirect()->route('alldoc')->with('success', 'You have successfully given your serial'); 
    }  

    //........................................Search Doctor.................................................//
    public function search(Request $request){
        $search = $request->get('search');
        $docs = DB::table('doctors')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('serialdoctor.alldoctor',['docs'=>$docs]); 
    }

}
