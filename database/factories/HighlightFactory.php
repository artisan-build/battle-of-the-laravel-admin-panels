<?php

namespace Database\Factories;

use App\Models\Highlight;
use Illuminate\Database\Eloquent\Factories\Factory;

class HighlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Highlight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10) % 3 === 0 ? null : rand(1,10),
            'seek_to' => rand(20, 240),
            'length' => rand(10,120),
            'contents' => $this->faker->paragraphs(3, true),
        ];
    }
}
