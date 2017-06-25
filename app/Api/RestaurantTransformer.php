<?php

namespace HotChicken\Api;

use HotChicken\Models\Restaurant;
use League\Fractal\TransformerAbstract;

class RestaurantTransformer extends TransformerAbstract
{
    public function transform(Restaurant $restaurant)
    {
        return [
            'id' => $restaurant->id,
            'name' => $restaurant->name,
            'address' => [
                'street' => $restaurant->street_address,
                'city' => $restaurant->city,
                'state' => 'TN',
                'zip' => $restaurant->zip_code
            ]
        ];
    }
}
