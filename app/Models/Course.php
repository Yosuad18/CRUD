<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function area() {
        return belongsTo('App/Models/Area');
    }

    public function apprentices() {
        return hasMany('App/Models/Apprentice');
    }

    public function training_center() {
        return belongsTo('App/Models/training_center');
    }

    public function teachers(){
        return belongsToMany('App/Models/Teacher');
    }
}
