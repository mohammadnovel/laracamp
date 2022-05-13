<?php

namespace App\Models;

class Article extends BaseModel
{
    protected $fillable = [
        'id',
        'title',
        'short_description',
        'description',
        'publish_at',
        'image',
        'thumbnail',
    ];

}
