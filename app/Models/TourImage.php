<?php

namespace App\Models;

class TourImage extends BaseModel
{
    protected $fillable = [
        'id',
        'tour_id',
        'ordering',
        'path',
    ];

}
