<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Doctor1;
use App\Feedback;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10); 
        return view ('admin.home',compact('users'));
    }


//.............................................Admin All Controls..............................................//
public function indexajax()
    {
        return view('doctor.doctor');
    }

    // All Data Read 
    public function allData()
    {
        $data = Doctor::all();
        return response()->json($data);
    }

    // Insert data 
    public function insertData(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'institution' => 'required',
        ]);

        $data = Doctor::insert([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'designation' => $request->designation,
            'institution' => $request->institution,
        ]);
        return response()->json($data);
    }

    // Edit Data & Update 
    public function editData($id)
    {
        $data = Doctor::findOrFail($id); 
        return response()->json($data);
    }

    public function updateData(Request $request,$id)
    {
        $request ->validate([
            'name' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'institution' => 'required',
        ]);

        $data = Doctor::findOrFail($id)->update([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'designation' => $request->designation,
            'institution' => $request->institution,
        ]);
        return response()->json($data);
    }

    public function deleteData($id)
    {
        $data = Doctor::findOrFail($id)->forceDelete(); 
        return response()->json($data);
    }

//............................................Pateint serial list......................................//

public function allcat()
{
    $categories = Doctor1::paginate(5);
    return view('doctor.serialdoctor',compact('categories')); 
}

// Delete single 
public function deletecat($id){
    Doctor1::find($id)->forceDelete(); 
    Return Redirect()->route('categorry')->with('success', 'Data Deleted Successfully'); 
}

// multiple delete 
public function del(Request $request){
    $delid = $request->input('delid');
    Doctor1::whereIn('id',$delid)->forceDelete(); 
    Return Redirect()->route('categorry')->with('success', 'Data Deleted Successfully');
    
}


//.........................................Feedback or Complain list......................................//

public function allcatt()
{
    $categories = Feedback::paginate(5);
    return view('feedback.feedback_admin',compact('categories')); 
}

// Delete single data 
public function deletecatt($id){
    Feedback::find($id)->forceDelete(); 
    Return Redirect()->route('admin_fc')->with('success', 'Data Successfully Deleted'); 
}

// Delete multiple data  
public function dell(Request $request){
    $delid = $request->input('delid');
    Feedback::whereIn('id',$delid)->forceDelete(); 
    Return Redirect()->route('admin_fc')->with('success', 'Data Successfully Deleted');
    
}
    
}
