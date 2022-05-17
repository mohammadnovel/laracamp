<?php

namespace App\Models;

class Location extends BaseModel
{
    protected $fillable = [
        'id',
        'name',
        'latitude',
        'longitude',
        'description'
    ];

}
