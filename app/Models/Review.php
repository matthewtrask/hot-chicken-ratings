<?php

namespace HotChicken\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'restaurant_id',
        'review'
    ];
}
