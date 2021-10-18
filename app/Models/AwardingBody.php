<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardingBody extends Model
{
    use HasFactory;

    public function exams(){
        return $this -> hasMany('App\Models\Exam');
    }

    public function courses(){
        return $this -> hasMany('App\Models\Course');
    }
}
