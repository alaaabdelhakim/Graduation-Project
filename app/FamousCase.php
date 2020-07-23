<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamousCase extends Model
{
    protected $table = 'famouscases';

    protected $primarykey = 'id';

    protected $fillable = [
        
        'f_name', 'f_desc' , 'image',
    ];}
