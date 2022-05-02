<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('pages.about'); 
    }
    public function gallery(){
        return view('pages.gallery'); 
    }
    public function our_doctor1(){
        return view('pages.our_doctor1'); 
    }
    public function our_doctor2(){
        return view('pages.our_doctor2'); 
    }
    public function our_doctor3(){
        return view('pages.our_doctor3'); 
    }
    public function our_doctor4(){
        return view('pages.our_doctor4'); 
    }
    public function our_doctor5(){
        return view('pages.our_doctor5'); 
    }
    
}

