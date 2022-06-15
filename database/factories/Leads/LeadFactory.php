<?php

namespace Database\Factories\Leads;

use App\Models\Leads\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $is_dead = $this->faker->randomElement($array = array ('yes','no'));
        return [
            'lead_source_id'=>  $this->faker->numberBetween($min = 1, $max = 24),
            'lead_status_id'=>  $this->faker->numberBetween($min = 1, $max = 6),
            'title_id'=>        $this->faker->numberBetween($min = 1, $max = 6),
            'user_id'=>         $this->faker->numberBetween($min = 1, $max = 5),
            'owner_id'=>        $this->faker->numberBetween($min = 1, $max = 10),
            'lead_temprature'=> $this->faker->randomElement($array = array ('Hot','Warm','Cold')),
            'score'=>           $this->faker->numberBetween($min = 1, $max = 10),
            'first_name'=>      $this->faker->firstName($gender = 'male'|'female'|'other'),
            'last_name'=>       $this->faker->lastName,
            'company_name'=>    $this->faker->company,
            'industry_id'=>     $this->faker->numberBetween($min = 1, $max = 10),
            'language_id'=>     $this->faker->numberBetween($min = 1, $max = 10),
            'email'=>           $this->faker->unique()->safeEmail,
            'phone'=>           $this->faker->e164PhoneNumber,
            'is_dead'=>         $is_dead,
            'is_poor_fit'=>     ($is_dead == 'yes') ? 'no' : $this->faker->randomElement($array = array ('yes','no')),
            'created_at'=>      $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        ];
    }
}
