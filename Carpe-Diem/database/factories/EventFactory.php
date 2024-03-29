<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'location' => $this->faker->address,
            'organizer_id' => null,
            'ticket_price' => $this->faker->randomFloat(2, 0, 100),
            'tickets_available' => $this->faker->numberBetween(50, 100),
            'start_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_time' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }

    public function organizerId($organizerId)
    {
        return $this->state(function (array $attributes) use ($organizerId) {
            return [
                'organizer_id' => $organizerId,
            ];
        });
    }
}
