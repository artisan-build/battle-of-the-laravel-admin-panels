<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => (int) $this->faker->numberBetween(1,10),
            'title' => \Str::title($this->faker->catchPhrase),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraphs(2, true)
        ];
    }
}
