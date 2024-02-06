<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence,
            'author'=>fake()->name,
            'isbn'=>fake()->isbn13,
            'price'=>fake()->randomFloat(nbMaxDecimals:2,min:10,max:100),
            'stock'=>fake()->numberBetween(int1:1,int2:100),
            //
        ];
    }
}
