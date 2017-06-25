<?php

namespace HotChicken\Api;

use HotChicken\Models\Rating;
use League\Fractal\TransformerAbstract;

class RatingTransformer extends TransformerAbstract
{
    public function transform(Rating $rating)
    {
        return [
            'restaurant' => $rating->restaurant,
            'rating' => $rating->rating,
            'review' => $rating->review,
            'user' => $rating->user,
            'createdAt' => $rating->created_at
        ];
    }
}
