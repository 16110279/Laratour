<?php

use Illuminate\Database\Seeder;

class TourPricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_pricings')->delete();

  $tour_pricings = array(
        array('name' => '1 Orang Dewasa', 'price' => '5000000', 'tour_id' => '1'),
        array('name' => '2 Orang Dewasa', 'price' => '9500000', 'tour_id' => '1'),
        array('name' => '1 Anak-anak', 'price' => '3000000', 'tour_id' => '1'),
		);

        		DB::table('tour_pricings')->insert($tour_pricings);

    }
}
