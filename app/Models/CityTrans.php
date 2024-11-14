<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityTrans extends Model
{
    protected $fillable = [
        'company_name',        
        'bus_number',       
        'arrival_time',       
        'departure_time',      
        'date',             
        'gathering_point',   
        'destination_from',
        'destination_to',
    ];
}
