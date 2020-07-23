<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = 'medicalcenters';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'm_name', 'm_phone' , 'm_address','m_link' ,'image',
    ];
}
