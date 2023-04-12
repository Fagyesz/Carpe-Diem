<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\EventFactory;
use Database\Factories\TicketFactory;
use Database\Factories\UserFactory;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 users
        UserFactory::new()->count(10)->create();

        // Create events and tickets for each user
        User::all()->each(function ($user) {
            EventFactory::new(['organizer_id' => $user->id])->count(2)->create()->each(function ($event) {
                TicketFactory::new(['event_id' => $event->id])->count(5)->create();
            });
        });

        $this->call(RolePermissionSeeder::class);
    }
}
