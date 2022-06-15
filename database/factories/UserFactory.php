<?php
namespace Database\Factories;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory{
    protected $model = User::class;

    public function definition(){
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'role_id'=> $this->faker->numberBetween($min = 2, $max = 3), // 1 is for admin
            'status'=> 'active',
            'email_verified_at' => now(),
            'password' => '$2y$10$0hJwwcF9nScQRH2Xhzz69uI8HuZWHkdWLJ3SQ.8iMKLAu9iNgxcTq', // devpremier
            'remember_token' => Str::random(10),
        ];
    }

}