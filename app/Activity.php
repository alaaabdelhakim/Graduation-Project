<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'a_type', 'audio' , 'video',
    ];
}
