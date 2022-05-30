<?php

namespace App\Models;

class Tour extends BaseModel
{
    
    protected $fillable = [
        'id',
        'title',
        'slug',
        'price',
        'address',
        'description',
        'location_id',
        'thumbnail',
        'address',
        'video',
        'category_id',
        'status',
    ];

    public function tour_images()
    {
        return $this->hasMany('App\Models\TourImage');
    }

    public function tour_category()
    {
        return $this->belongsTo('App\Models\TourCategory');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }
}
