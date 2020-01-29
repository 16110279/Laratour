<?php

use Illuminate\Database\Seeder;

class PaymentOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_options')->delete();

        $paymentoption = array(
			array('nama_bank' => 'BRI', 'no_rek' => '5832958935295005', 'status' => 'Aktif', 'atas_nama' => 'PT. Travelo Bahagia Bersama'),
			array('nama_bank' => 'BCA', 'no_rek' => '142894284', 'status' => 'Aktif', 'atas_nama' => 'PT. Travelo Bahagia Bersama'),
			array('nama_bank' => 'BNI', 'no_rek' => '2422424222424', 'status' => 'Aktif', 'atas_nama' => 'PT. Travelo Bahagia Bersama'),
			array('nama_bank' => 'Mandiri', 'no_rek' => '4143253553532553', 'status' => 'Aktif', 'atas_nama' => 'PT. Travelo Bahagia Bersama'),
			array('nama_bank' => 'Permata', 'no_rek' => '6326326326236226', 'status' => 'Aktif', 'atas_nama' => 'PT. Travelo Bahagia Bersama'),
		);

		DB::table('payment_options')->insert($paymentoption);


    }
}
