<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

       for($i = 0; $i < 5; $i++){
        //creo una nuova variabile
        $train = new Train();
        
        $train->company = $faker->company();
        $train->departure = $faker->city();
        $train->arrival = $faker->city();
        $train->departure_time = $faker->date('Y-m-d H:i');
        $train->arrival_time = $faker->date('Y-m-d H:i');
        $train->reference = $faker->isbn10();
        $train->carriages = $faker->numberBetween(1, 30);
        $train->delay = $faker->numberBetween(0, 360);
        $train->is_deleted = $faker->boolean();
        $train->price = $faker->numberBetween(1, 100);

        $train->save();

       }


    }
}
