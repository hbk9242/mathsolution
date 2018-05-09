<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
       use Notifiable;
     
     
     
     
      protected $fillable = [
        'user_id','image','city','state','country','zip_code', 'institution',
    ];
    //
}
