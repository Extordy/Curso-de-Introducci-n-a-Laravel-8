<?php

namespace App\Http\Controllers;

//agregar laentidad con la que se trabajara
use App\Models\Course;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //metodo para cuando se accseda al index
    public function home()
    {
        return view('index');
    }
    //metodo para cuando se accseda al curso y la entidad con la que se trabajara
    public function course(Course $course)
    {
        return view('course',compact('course'));
    }
}
