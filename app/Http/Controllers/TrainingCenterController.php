<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\training_center;

class TrainingCenterController extends Controller
{
    public function create (){
     return view('training.create');

    }

    public function store(Request $request){

    $training = new training_center();

    $training->name=$request->name;
    $training->location=$request->location;
    $training->save();

    return $training;

    }
}

