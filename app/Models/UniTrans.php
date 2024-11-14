<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniTrans extends Model
{
    protected $fillable = [
        'company_name', 
        'driver_name',       
        'bus_number',       
        'arrival_time',       
        'departure_time',      
        'date',             
        'city',   
        'neighborhood',
    ];
}
