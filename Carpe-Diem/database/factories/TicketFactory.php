<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;
use lluminate\Support\Str;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'event_id' => null, // Set default value to null
            'user_id' => null, // Set default value to null
            'ticket_type' => $this->faker->word,
            'ticket_price' => $this->faker->randomFloat(2, 0, 100),
            'ticket_code'=> $this->faker->asciify('******************************'),
            'ticket_image_url'=> $this->faker->url(20)
        ];
    }
}
