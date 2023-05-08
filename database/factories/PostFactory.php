<?php
namespace Database\Factories;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(), // Add category_id factory
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Post $post) {
            // Attach random tags to the post
            $tags = Tag::inRandomOrder()->take(rand(1, 5))->pluck('id');
            $post->tags()->attach($tags);
        });
    }
}
