<?php

namespace App\Models;

class PaymentMethod extends BaseModel
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
    ];

}
