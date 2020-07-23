<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    protected $primarykey = 'id';

    protected $fillable = [
        
        's_name', 's_phone' , 's_address', 's_link', 'image',
    ];
}
