<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'species' => $this->faker->word(),
            'dateBirth'  => $this->faker->dateTimeThisYear()->format('Y/m/d'),
            'dateDeath'  => $this->faker->dateTimeThisYear()->format('Y/m/d'),
            'note'  => $this->faker->sentence(),
        ];
    }
}
