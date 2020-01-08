<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('destinations')->delete();

		$destinations = array(
			array('name' => 'Ibiza', 'desc' => 'Beautiful Beach','country_id' => 199),
			array('name' => 'Borobudur', 'desc' => 'Indonesian Herritage','country_id' => 101),
			
		);

		DB::table('destinations')->insert($destinations);
    }
}
