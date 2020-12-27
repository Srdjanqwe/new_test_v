<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active'=>$this->faker->boolean,
            'is_admin'=>false,
            'loginCount'=>$this->faker->randomDigit
            // 'is_active'=>1
        ];
    }
    public function newUser()
    {
        return $this->state([
            'name' => 'John Doe',
            'email' => 'john@laravel.com',
            // 'user_active'=>1,
            'is_active'=> true,
            'is_admin' => true
            // 'is_active'=> 0
        ]);
    }
}
