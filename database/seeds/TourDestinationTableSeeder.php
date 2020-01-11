<?php

use Illuminate\Database\Seeder;

class TourDestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_destinations')->delete();
        
        $td = array(
        array('destination_id' => 1, 'tour_id' => 2),
        array('destination_id' => 2, 'tour_id' => 2),
        array('destination_id' => 3, 'tour_id' => 2),
        // array('destination_id' => 4, 'tour_destination' => 2),
        );

        DB::table('tour_destinations')->insert($td);
    }
}
