<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'u_name', 'u_phone' , 'u_email', 'message',
    ];

}
