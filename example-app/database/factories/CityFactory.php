<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $model = City::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $countries = [
//          'Asia',
//          'Europe',
//        ];
//        shuffle($countries);
//        $country = array_shift($countries);
        return [
            'name' => $this->faker->unique()->city,
        ];
    }
}
