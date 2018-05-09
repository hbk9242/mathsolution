<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
       use Notifiable;
     
     
     
     
      protected $fillable = [
        'title','course_id','student_id',
    ];
    //
}
