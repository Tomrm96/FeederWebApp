<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{


    protected $fillable =[
        'Pet_Name',
        'Date_to_Feed', 
        'Feed_Time', 
        'Feeding_Amount', 
    ];
}
