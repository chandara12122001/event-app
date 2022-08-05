<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $event = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'description'=>$this->faker->text,
            'interested'=>$this->faker->numberBetween(1,50),
            'going'=>$this->faker->numberBetween(1,50),
            'no_of_seats'=>$this->faker->numberBetween(1,50),
            'price'=>$this->faker->numberBetween(1,50),
            'event_date'=>$this->faker->date
        ];
    }
}
