<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+1 week')->format('Y-m-d H:i:s');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 hour', '+1 week')->format('Y-m-d H:i:s');
            $newTrain->train_code = $faker->bothify(strtoupper('??####'));
            $newTrain->train_carriage_number = $faker->randomNumber(2, false);
            $newTrain->on_time = $faker->boolean(0.5);
            $newTrain->late = $faker->boolean(0.5);

            $newTrain->save();
        }
    }
}
