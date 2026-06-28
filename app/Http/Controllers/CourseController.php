<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create (){
     return view('course.create');
    }

    public function store(Request $request){

    $course= new Course();

    $course ->course_number=$request->course_number;
    $course ->save();

    return $course;

    }
}
