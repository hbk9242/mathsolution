<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentQuestionTeacher extends Model
{
    use Notifiable;
     
     
     
     
      protected $fillable = [
        'student_id','question_id','teacher_id','status	',
    ];
    //
}
