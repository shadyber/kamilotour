<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->unique()->word(),
            'detail' => $this->faker->sentence,
            'tags' => $this->faker->word(),
            'photo' => $this->faker->imageUrl(720,1024,'tourism'),
            'thumb' => $this->faker->imageUrl(320,460,'tourism'),
            'length' => $this->faker->word(),
            'offer' => $this->faker->numberBetween(300,900),
            'visit' => $this->faker->numberBetween(0,100),
        ];
    }
}
