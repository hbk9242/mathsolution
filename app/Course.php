<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
       use Notifiable;
     
     
     
     
      protected $fillable = [
        'category_id','teacher_id','name',
    ];
    //
}
