<?php

namespace Database\Factories;

use App\Enums\FileTypeEnum;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'fullname' => $this->faker->name,
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'type' => $this->faker->randomElement(FileTypeEnum::cases()),
            'size' => rand(min: 1000000, max: 20000000),
        ];
    }
}
