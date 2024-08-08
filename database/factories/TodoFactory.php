<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Model\Todo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    protected $model = Todo::class;
    
    public function definition()
    {
        return [
            'description' => $this->faker->sentence,
            'completed' => $this->faker->boolean,
        ];
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /*
    public function definition(): array
    {
        return [
            //
        ];
    }*/
}
