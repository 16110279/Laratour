<?php

use Illuminate\Database\Seeder;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->delete();

        $tours = array(
            array('name' => '6D/5N TOKYO + JR EAST PASS TOHOKU AREA (WINTER)', 'category' => 'Group', 'slug' => '6d5n-tokyo-jr-east-pass-tohoku-area-winter', 'country_id' => 2 , 'img' => '1.png', 'itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
            array('name' => '9D/7N EASY GO TO EASTERN EUROPE' , 'category' => 'Group', 'slug' => '9d7n-easy-go-to-eastern-europe', 'country_id' => 4 , 'img' => '2.png','itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
            array('name' => '6D/5N TOKYO BEST DEALS' , 'category' => 'Individual', 'slug' => '6d5n-tokyo-best-deals', 'country_id' => 2 , 'img' => '3.png','itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
            array('name' => '6D4N JAPAN FUN ESCAPADE' , 'category' => 'Individual', 'slug' => '6d4n-japan-fun-escapade', 'country_id' => 2 , 'img' => '4.png','itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
            array('name' => '5D/3N FABULOUS WINTER KOREA + SKI RESORT' , 'category' => 'Individual', 'slug' => '5d3n-fabulous-winter-korea-ski-resort', 'country_id' => 4 , 'img' => '5.png','itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
            array('name' => '6D/5N TOKYO + JR EAST PASS TOHOKU AREA (SUMMER)' , 'category' => 'Group', 'slug' => '6d5n-tokyo-jr-east-pass-tohoku-area-sumer', 'country_id' => 2 , 'img' => '6.png','itinerary' => 'Trip ke Jepang Day 1 bla bla bla'),
        );
        
        DB::table('tours')->insert($tours);


    }


}
