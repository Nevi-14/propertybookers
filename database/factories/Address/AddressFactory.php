<?php
namespace Database\Factories\Address;

use App\Models\Address\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory{
    protected $model = Address::class;

    public function definition(){
        return [
            'lead_id'=>  $this->faker->numberBetween($min = 1, $max = 100),
            'country_id'=>  $this->faker->numberBetween($min = 1, $max = 245),
            'state_id'=>  0,
            'city_id'=>  0,
            "address_line_1" => $this->faker->address,
            "address_line_2" => $this->faker->secondaryAddress,
        ];        
    }

}