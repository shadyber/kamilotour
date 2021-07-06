<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->name(),
            'photo' => $this->faker->imageUrl(720,1024,'tourism'),
            'thumb' => $this->faker->imageUrl(320,460,'tourism'),
            'detail' => $this->faker->sentence(),
        ];
    }
}
