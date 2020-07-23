<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'c_name', 'c_phone' , 'c_service', 'c_address', 'c_link', 'c_phone', 'image',
    ];
}
