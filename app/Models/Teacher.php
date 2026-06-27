<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function area() {
        return belongsTo('App/Models/Area');
    }

    public function training_center() {
        return belongsTo('App/Models/training_center');
    }
}
