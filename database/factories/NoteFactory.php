<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lead_id'=>  $this->faker->numberBetween($min = 1, $max = 100),
            'note'=>     $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
