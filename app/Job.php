<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'j_name', 'j_type' , 'j_address', 'j_link', 'image',
    ];
}
