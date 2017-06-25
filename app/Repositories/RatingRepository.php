<?php

namespace HotChicken\Repositories;

use HotChicken\Models\Rating;
use HotChicken\Models\Review;
use Illuminate\Database\Eloquent\Collection;

class RatingRepository
{
    public function all() : Collection
    {
        return Rating::all();
    }

    public function find(int $id) : Collection
    {
        return Rating::find($id);
    }

    public function save($rating)
    {
        $newRating = new Rating();
        $newRating->restaurant_id = $rating->getRestaurantId();
        $newRating->rating = $rating->getRating();

        $newRating->review()->save(new Review([
            'review' => $rating->getReview(),
            'restaurant_id' => $rating->getRestaurantId()
        ]));

        return $newRating->save();
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}
