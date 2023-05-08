<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Database\Factories\EventFactory;
//use Database\Factories\TicketFactory;
use Database\Factories\PostFactory;
use Database\Factories\CommentFactory;
use Database\Factories\CategoryFactory;
use Database\Factories\TagFactory;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 5 users
        UserFactory::new()->count(5)->create();

        // Create categories and tags
        CategoryFactory::new()->count(5)->create();
        TagFactory::new()->count(10)->create();

        // Create events and tickets for each user
        User::all()->each(function ($user) {
            EventFactory::new()->organizerId($user->id)->count(2)->create();/* ->each(function ($event) {
                TicketFactory::new(['event_id' => $event->id, 'user_id' => $event->organizer_id])->count(5)->create(); 
            });*/
        });

        // Create posts for each user with categories and tags
        User::all()->each(function ($user) {
            PostFactory::new(['user_id' => $user->id])->count(5)->create()->each(function ($post) {
                $post->category()->associate(Category::inRandomOrder()->first());
                $post->save();
                $post->tags()->sync(Tag::inRandomOrder()->limit(3)->get()); // Update this line
            });
        });


        // Create comments for events
        Event::all()->each(function ($event) {
            CommentFactory::new([
                'commentable_id' => $event->id,
                'commentable_type' => 'App\Models\Event',
                'user_id' => User::inRandomOrder()->first()->id
            ])->count(3)->create();
        });

        // Create comments for posts
        Post::all()->each(function ($post) {
            CommentFactory::new([
                'commentable_id' => $post->id,
                'commentable_type' => 'App\Models\Post',
                'user_id' => User::inRandomOrder()->first()->id
            ])->count(3)->create();
        });

        $this->call(RolePermissionSeeder::class);
    }
}
