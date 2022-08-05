<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::factory()->times(10)->create();

        foreach (Event::all() as $event) {
            $users = User::inRandomOrder()->take(rand(1, 3))->pluck('id');
            // $users = User::all();
            foreach($users as $user){
                $event->users()->attach($user, ['isOrganizer'=>rand(0,1)]);
            }
        }
    }
}
