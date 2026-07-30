<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Computer;

class ComputerController extends Controller
{

    public function index(){
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    public function create (){
        $number = Number::all();
        $brand= Brand::all();
        return view('computer.create', compact('number', 'brand'));
    }

    public function store(Request $request){

    $computer = new Computer();

    $computer->number=$request->number;
    $computer->brand=$request->brand;
    $computer->save();

    return $computer;
    }

    public function show(Computer $computer){

        // $computer=Computer::find($id);
        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer){ //Encuentro el Curso
        $users = User::all();
        return view('computer.edit', compact('computer', 'users'));
    }

    public function update(Request $request, Computer $computer){

        $computer->update($request->all());

        return redirect()->route('computer.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
