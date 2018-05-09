<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
     use Notifiable;
     
     
     
     
      protected $fillable = [
        'image	', 'city','state','zip_code','country','exp_year', 'qualifcation','user_id',
    ];

    //
}
