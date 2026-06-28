<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Computer;

class ComputerController extends Controller
{
    public function create (){
     return view('computer.create');

    }

    public function store(Request $request){

    $computer = new Computer();

    $computer->number=$request->number;
    $computer->brand=$request->brand;
    $computer->save();

    return $computer;

    }
}
