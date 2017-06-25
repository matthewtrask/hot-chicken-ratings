<?php

namespace HotChicken\Models;

use HotChicken\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rating extends Model
{
    protected $table = 'ratings';

    protected $fillable = [
        'restaurant_id',
        'review_id',
        'user_id',
        'rating'
    ];

    public function user() : HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function restaurant() : BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'id', 'review_id');
    }
}
