<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;


use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consulta(){

    //  $post = new Post();//crearme un objeto del tipo de dato a consultar
    //  $post=Post::find(1);
    //  return $post->user;
    //  return $post->category;

       $apprentice = new Apprentice();//crearme un objeto del tipo de dato a consultar
       $apprentice=Apprentice::find(2);
       return $apprentice->name;
    // return $apprentice->posts;

      //$categories = Category::with(['posts.user'])->get();
      //return  $categories;

    }
}
