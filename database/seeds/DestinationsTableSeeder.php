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
			array('name' => 'Shibuya', 'desc' => 'Shibuya merupakan salah satu daerah yang sangat terkenal di Jepang karena merupakan pusat hiburan di Tokyo. Shibuya juga terkenal sebagai pusat perkembangan fashion di jepang, oleh dari itu jangan heran apabila Shibuya selalu ramai dikunjungi.','country_id' => 2),
			array('name' => 'Aoba Castle', 'desc' => 'Merupakan salah satu ikon wisata yang ada di kota Sendai, Prefektur Miyagi. Kastil Nama kastil ini diambil dari nama salah satu wilayah yang berada di kaki Gunung Aoba yang sekarang telah diubah namanya menjadi Senday. Kastil Aoba juga telah ditetapkan menjadi salah satu monumen yang bersejarah, dan salah satu objek wisata favorit wisatawan di kota Sendai, Prefektur Miyagi. Jepang.','country_id' => 2),
			array('name' => 'Asakusa Kannon Temple', 'desc' => 'Merupakan kuil tertua di Tokyo,Jepang. Terdapat Kaminarimon Gate atau gerbang dewa petir (the Gate of the God of Thunder) yaitu pintu masuk utama ke kuil Asakusa Kannon. Orang Jepang mempercayai pintu tersebut memisahkan antara kehidupan fana dan kehidupan religi','country_id' => 2),
			array('name' => 'Mt. Fuji', 'desc' => 'Mt. Fuji adalah gunung tertinggi dan tersuci yang sangat populer di Jepang. Gunung Fuji berada di perbatasan antara Yamanshi dan Shizuoka, Gunung Fuji dapat dilihat langsung dari Tokyo dan Yokohama jika cuaca bagus.','country_id' => 2),
			array('name' => 'Gotemba Premium Outlet', 'desc' => 'Gotemba Premium Outlet merupakan tempat perbelanjaan terkemuka yang berada di kaki Gunung Fuji.','country_id' => 2),
			// array('name' => '', 'desc' => '','country_id' => 2),
			
		);

		DB::table('destinations')->insert($destinations);
    }
}
