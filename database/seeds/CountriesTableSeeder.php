<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    DB::table('countries')->delete();
    
		$countries = array(
			array('name' => 'Spanyol'),
			array('name' => 'Jepang'),
			array('name' => 'Indonesia'),
			array('name' => 'Korea'),
			// array('name' => 'United States'),
	
		);

		DB::table('countries')->insert($countries);
    }
}
