<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function index(){
        $title = 'Welcome To Chrollo!';
        //return view('pages.about', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Chrollo';
        //return view('pages.about');
        return view('pages.about')->with('title',$title);
     }
     public function services(){
         $data = array(
             'title' => 'Services',
             'services' => ['Blog', 'Profile', 'Communities']
             
         );
        return view('pages.services')->with($data);
     }
    

    
}
