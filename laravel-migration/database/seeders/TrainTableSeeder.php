<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $new_train = new Train();
            $new_train->agency = $faker->randomElement(['trenitalia', 'italo']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->datetime();
            $new_train->arrival_time = $faker->datetime();
            $new_train->train_code = $faker->postcode();
            $new_train->carriage_number = $faker->numberBetween(1,10);
            $new_train->in_time = rand(0,1);
            $new_train->cancelled = rand(0,1);

            $new_train->save();
        }
    }
}
