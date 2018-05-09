<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
        use Notifiable;
     
     
     
     
      protected $fillable = [
        'sender_id','reciever_id','message',
    ];
    //
}
