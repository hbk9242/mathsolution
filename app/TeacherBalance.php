<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherBalance extends Model
{
    use Notifiable;
     
     
     
     
      protected $fillable = [
        'amount', 'city','points',
    ];
    //
}
