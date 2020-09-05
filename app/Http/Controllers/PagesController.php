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
        $author  = "Glauco Todesco";
        $company = "Abútua Tecnologia";
        return view('pages.about')->with('author', $author)->with('company',$company);
    }

    public function services(){
        $data = array(
                'services'   => ['Desenvolvimento de Sistemas','Cursos e Treinamentos','Consultorias']
        );
        
        return view('pages.services')->with($data);

    }

    public function projects(){
        return view('pages.projects');
    }
    


}
