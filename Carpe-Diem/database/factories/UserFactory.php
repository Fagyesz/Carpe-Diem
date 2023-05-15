<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'avatar' => $this->faker->imageUrl(200, 200),
            'provider' => null,
            'provider_id' => null,
            'provider_token' => null,
            'bio' => $this->faker->text(200),
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone' => $this->faker->bothify('##-##-###-####'),
            'address' => $this->faker->address,
            'country' => $this->faker->country,
            'timezone' => $this->faker->timezone,
            'language' => $this->faker->languageCode,
            'is_active' => $this->faker->boolean,
            'last_login_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'email_notifications_enabled' => $this->faker->boolean,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
