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
			array('name' => 'Indonesia', 'image' => 'indonesia.jpg'),
    		array('name' => 'Dubai', 'image' => 'dubai.jpg'),
			array('name' => 'Rusia', 'image' => 'rusia.jpg'),
			array('name' => 'Yunani', 'image' => 'yunani.jpg'),
			array('name' => 'Prancis', 'image' => 'france.png'),
			array('name' => 'Italia', 'image' => 'italia.jpg'),
			array('name' => 'Jepang', 'image' => 'jepang.jpg'),
			array('name' => 'Korea Selatan', 'image' => 'koreaselatan.jpeg'),
			// array('name' => 'United States'),
	
		);

		DB::table('countries')->insert($countries);
    }
}
