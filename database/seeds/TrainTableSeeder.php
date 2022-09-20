<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo una nuova variabile
        $new_train = new Train();
        $new_train->company = 'Italo';
        $new_train->departure = 'Milano';
        $new_train->arrival = 'Palermo';
        $new_train->departure_time = 12.00;
        $new_train->arrival_time = 16.30;
        $new_train->reference = 'AJ0405MIPA91';
        $new_train->carriages = 20;
        $new_train->delay = 0;
        $new_train->is_deleted = false;
        $new_train->price = 65.50;

        $new_train->save();
    }
}
