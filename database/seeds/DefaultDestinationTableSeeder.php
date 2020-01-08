<?php

use Illuminate\Database\Seeder;

class DefaultDestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Destination::create([
            'name' => 'Jaka',
        ]);
    }
}
