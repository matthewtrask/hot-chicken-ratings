<?php

namespace HotChicken\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function getRestaurantId()
    {
        return $this->get('restaurantId');
    }

    public function getRating()
    {
        return $this->get('rating');
    }

    public function getReview()
    {
        return $this->get('review');
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'restaurantId' => 'required|int',
            'rating'       => 'required|int',
            'review'       => 'required|string',
        ];
    }
}
