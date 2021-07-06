<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

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
            'detail' => $this->faker->sentence,
            'album_id' =>1,

        ];
    }
}
