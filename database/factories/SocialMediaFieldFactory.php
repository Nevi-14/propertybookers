<?php
namespace Database\Factories;

use App\Models\SocialMediaField;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFieldFactory extends Factory
{
    protected $model = SocialMediaField::class;

    public function definition(){
        return [
            'lead_id'=>  $this->faker->numberBetween($min = 1, $max = 100),
            "facebook" => $this->faker->username,
            "twitter" => $this->faker->username,
        ];
    }
}
