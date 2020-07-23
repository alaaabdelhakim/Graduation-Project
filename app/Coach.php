<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{

    protected $table = 'coaches';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'c_phone', 'c_name' , 'c_address', 'c_link', 'image',
    ];
}
