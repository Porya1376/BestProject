<?php

namespace Database\Factories;

use App\Enums\ProductStatusEnum;
use App\Enums\ProductTypeEnum;
use App\Enums\UserTypeEnum;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
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
            'type' => $this->faker->randomElement(ProductTypeEnum::cases()),
            'status'=> $this->faker->randomElement(ProductStatusEnum::cases()),
            'creator_user_id' => User::factory(),
            'acceptor_user_id' => User::factory()->create(['type'=>UserTypeEnum::USER_TYPE_ADMIN]),
            'category_id' => Category::factory(),
            'reject_reason' => $this->faker->sentence(),
            'data' => json_encode([
                'details' => [
                    [
                        'title' => 'weight',
                        'value' => '3kg'
                    ],
                    [
                        'title' => 'size',
                        'value' => '50'
                    ],
                    [
                        'title' => 'inches',
                        'value' => '45inches'
                    ],
                    [
                        'title' => 'height',
                        'value' => '120cm'
                    ],

                ]
            ]),
            'accpeted_at' => null,
        ];
    }
}
