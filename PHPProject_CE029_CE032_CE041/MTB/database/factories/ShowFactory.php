<?php

namespace Database\Factories;

use App\Models\Show;
use App\Models\City;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Show::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => City::factory(),
            'movie_id' => Movie::factory(),
            'show_date' => $this->faker->date(),
            'show_time' => $this->faker->time()
            //
        ];
    }
}
