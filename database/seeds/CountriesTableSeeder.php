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
			array('name' => 'Indonesia'),
      array('name' => 'Dubai'),
			array('name' => 'Rusia'),
			array('name' => 'Yunani'),
			array('name' => 'Prancis'),
			array('name' => 'Italia'),
			array('name' => 'Jepang'),
			array('name' => 'Korea Selatan'),
			// array('name' => 'United States'),
	
		);

		DB::table('countries')->insert($countries);
    }
}
