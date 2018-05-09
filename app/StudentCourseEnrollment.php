<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourseEnrollment extends Model
{
      use Notifiable;
     
     
     
     
      protected $fillable = [
        'student_id','course_id','teacher_id',
    ];
    //
}
