<?php

namespace Database\Factories;

use App\Models\Academy;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Academy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'expertise1' => $this->faker->word,
            'expertise2' => $this->faker->word,
            'expertise3' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'experience' => $this->faker->numberBetween(1, 20),
            'image' => $this->faker->imageUrl(640, 480, 'business', true, 'Faker'),
        ];
    }
}
