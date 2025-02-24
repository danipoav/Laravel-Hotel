<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(2, 1000),
            'name' => fake()->name(),
            'photo' => fake()->unique()->randomElement(['assets/imgs/room-img1.jpg', 'assets/imgs/room-img2.jpg', 'assets/imgs/room-img3.jpg', 'assets/imgs/room-img4.jpg', 'assets/imgs/room-img5.jpg', 'assets/imgs/room-img6.jpg']),
            'bed_type' => fake()->randomElement(['Minimal Duplex Room', 'Single Room', 'Suite', 'Double Room', 'Cabana Room', 'Luxury Double Bed', 'Penthouse Suite']),
            'room_number' => fake()->numberBetween(100, 400),
            'facilities' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => fake()->numberBetween(500, 2000),
            'status' => fake()->randomElement(['Booked', 'Avaliable'])
        ];
    }
}
