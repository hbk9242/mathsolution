<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
        use Notifiable;
     
     
     
     
      protected $fillable = [
        'transaction_id','amount','points','student_id',
    ];
    //
}
