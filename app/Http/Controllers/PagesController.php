<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Sistema de Blogs 1.0";
        return view('index')->with('title', $title);
    }
     
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function projects(){
        return view('pages.projects');
    }
    


}
