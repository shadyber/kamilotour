<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Destination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'slug'=>$this->faker->word(),
            'detail'=>$this->faker->sentence(),
            'photo'=>$this->faker->imageUrl(340,480),
            'thumb'=>$this->faker->imageUrl(230,360),

        ];
    }
}
