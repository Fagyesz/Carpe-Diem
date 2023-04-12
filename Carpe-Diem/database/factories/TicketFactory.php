<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'event_id' => function () {
                return \App\Models\Event::factory()->create()->id;
            },
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'ticket_type' => $this->faker->word,
            'ticket_price' => $this->faker->randomFloat(2, 0, 100),
            'ticket_quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
