<?php

use Illuminate\Database\Seeder;

class TourScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_schedules')->delete();


  $tour_schedules = array(
        array('date_start' => '2020-02-01', 'duration' => '4', 'date_end' => '2020-02-05', 'tour_id' => 1),
        array('date_start' => '2020-02-10', 'duration' => '4', 'date_end' => '2020-02-14', 'tour_id' => 1),
        array('date_start' => '2020-02-22', 'duration' => '4', 'date_end' => '2020-02-26', 'tour_id' => 1),     
		);

        DB::table('tour_schedules')->insert($tour_schedules);

    }
}
