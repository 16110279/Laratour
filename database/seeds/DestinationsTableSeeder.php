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
			array('name' => 'Pulau Padar', 'image' => 'Labuan-Bajo-Pulau-Padar.jpg','country_id' => 1),
			array('name' => 'Waerebo', 'image' => 'Labuan-Bajo-Wae-Rebo.jpg','country_id' => 1),
			array('name' => 'Pulau Kelor', 'image' => 'Labuan-Bajo-Pulau-Kelor.jpg','country_id' => 1),
			array('name' => 'Pantai Pink', 'image' => 'Labuan-Bajo-Pantai-Pink.jpg','country_id' => 1),
			array('name' => 'Gili Laba', 'image' => 'Labuan-Bajo-Gili-Lawa-Darat.jpg','country_id' => 1),
			array('name' => 'Pulau Kanawa', 'image' => 'Labuan-Bajo-Pulau-Kanawa.jpg','country_id' => 1),
			array('name' => 'Danau Kelimutu', 'image' => 'Labuan-Bajo-Danau-Kelimutu.jpg','country_id' => 1),
			array('name' => 'Desa Tradisional Bena', 'image' => 'Labuan-Bajo-Desa-Bena.jpg','country_id' => 1),
			array('name' => 'Garuda Wisnu Kencana (GWK)', 'image' => 'patung-garuda-wisnu-kencana-bali.jpg','country_id' => 1),
			array('name' => 'Pantai Kuta', 'image' => 'pantai-kuta-sunset.jpg','country_id' => 1),
			array('name' => 'Pura Besakih', 'image' => 'pura-agung-besakih.jpg','country_id' => 1),
			array('name' => 'Bali Safari And Marine Park', 'image' => 'wisata-bali-safari-and-marine-park.jpg','country_id' => 1),
			array('name' => 'Pantai Sanur', 'image' => 'berlibur-di-pantai-sanur.jpg','country_id' => 1),
			array('name' => 'Pantai Uluwatu', 'image' => 'pantai-uluwatu-bali.jpg','country_id' => 1),
			array('name' => 'Danau Batur', 'image' => 'danau-batur-bali.jpg','country_id' => 1),
			array('name' => 'Danau Beratan', 'image' => 'danau-beratan.jpg','country_id' => 1),
			array('name' => 'Danau Tamblingan', 'image' => 'danau-tamblingan.jpg','country_id' => 1),
			array('name' => 'Nusa Penida', 'image' => 'Nusa-Penida-Angel-Billabong.jpg','country_id' => 1),
			array('name' => 'Burj Khalifa', 'image' => 'burj-khalifa.jpg','country_id' => 2),
			array('name' => 'Jumeirah Beach', 'image' => 'Jumeirah-Beach.jpg','country_id' => 2),
			array('name' => 'Bastakia Quarter', 'image' => 'bastakiya.jpg','country_id' => 2),
			array('name' => 'Big Red', 'image' => 'big-red-dune.jpg','country_id' => 2),
			array('name' => 'Dubai Museum', 'image' => 'dubai-museum.jpg','country_id' => 2),
			array('name' => 'Dubai Miracle Garden', 'image' => 'dubai-miracle-garden.jpg','country_id' => 2),
			array('name' => 'Naif Market', 'image' => '','country_id' => 2),
			array('name' => 'Kremlin', 'image' => 'kremlin.jpg','country_id' => 3),
			array('name' => 'Saint Basil’s Cathedral', 'image' => 'Katedral-santa-Basil.jpg','country_id' => 3),
			array('name' => 'Red Square', 'image' => 'Moscow-Red-Square.jpg','country_id' => 3),
			array('name' => 'Peterhof Palace', 'image' => 'Peterhof-Palace.jpg','country_id' => 3),
			array('name' => 'State Hermitage Museum', 'image' => 'hermitage.jpg','country_id' => 3),
			array('name' => 'Masjid Lala Tulpan', 'image' => 'Lala-Tulpan-Mosque.jpg','country_id' => 3),
			array('name' => 'Nizhny Novgorod', 'image' => 'Nizhny-Novgorod.jpg','country_id' => 3),
			array('name' => 'Sochi', 'image' => 'Sochi.jpg','country_id' => 3),
			array('name' => 'Danau Baikal', 'image' => 'danau-baikal.jpg','country_id' => 3),
			array('name' => 'Old Arbat Street', 'image' => 'Old-Arbat.jpg','country_id' => 3),
			array('name' => 'Acropolis', 'image' => 'Acropolis.jpg','country_id' => 4),
			array('name' => 'Meteora', 'image' => 'Meteora.jpg','country_id' => 4),
			array('name' => 'Delphi Theatre', 'image' => 'delphi-Theatre.jpg','country_id' => 4),
			array('name' => 'Crete Island', 'image' => 'delphi-Theatre.jpg','country_id' => 4),
			array('name' => 'Lindos', 'image' => 'Lindos.jpg','country_id' => 4),
			array('name' => 'Mystras', 'image' => 'mystras.jpg','country_id' => 4),
			array('name' => 'Gunung Athos', 'image' => 'athos.jpg','country_id' => 4),
			array('name' => 'Santorini', 'image' => 'santorini.jpg','country_id' => 4),
			array('name' => 'Mykonos', 'image' => 'mykonos.jpg','country_id' => 4),
			array('name' => 'Pantai Myrtos', 'image' => 'Myrtos.jpg','country_id' => 4),
			array('name' => 'Gorge Of Samaria', 'image' => 'Samaria.jpg','country_id' => 4),
			array('name' => 'Eiffel Tower', 'image' => 'Menara-Eiffel.jpg','country_id' => 5),
			array('name' => 'Basilica Of Sacred Heart Of Paris', 'image' => 'Basilica-of-Sacred-Heart-of-Paris.jpg','country_id' => 5),
			array('name' => 'Pont Du Gard Bridge', 'image' => 'pont-du-gard-kayak.jpg','country_id' => 5),
			array('name' => 'Arc De Triomphe', 'image' => 'Arc-De-Triomphe.jpg','country_id' => 5),
			array('name' => 'Verdon Gorge Canyon', 'image' => 'Gorges-du-Verdon-France.jpg','country_id' => 5),
			array('name' => 'Chateau De Chambord', 'image' => 'Chateau-De-Chambord.jpg','country_id' => 5),
			array('name' => 'Saint Michel', 'image' => 'Mont-Saint-Michel.jpg','country_id' => 5),
			array('name' => 'The Louvre', 'image' => 'the-Louvre.jpg','country_id' => 5),
			array('name' => 'Palace Of Versailles', 'image' => 'VERSAILLES.jpg','country_id' => 5),
			array('name' => 'Disneyland', 'image' => 'Disneyland-Paris.jpg','country_id' => 5),
			array('name' => 'Colosseum', 'image' => 'Colosseum.jpg','country_id' => 6),
			array('name' => 'Museum Vatikan', 'image' => 'Museum-Vatikan.jpg','country_id' => 6),
			array('name' => 'Castle Sant’ Angelo', 'image' => 'Castel-sant-angelo.jpg','country_id' => 6),
			array('name' => 'Vasilica Santa Maria Maggiore', 'image' => 'Vasilica-Santa-Maria-Maggiore.jpg','country_id' => 6),
			array('name' => 'Pantheon', 'image' => 'Pantheon.jpg','country_id' => 6),
			array('name' => 'Trevi Fountain', 'image' => 'Trevi-Fountain.jpg','country_id' => 6),
			array('name' => 'Piazza Novona', 'image' => 'Piazza-Novona.jpg','country_id' => 6),
			array('name' => 'Venice', 'image' => 'Venice.jpg','country_id' => 6),
			array('name' => 'Rabit Beach', 'image' => 'Rabit-Beach.jpg','country_id' => 6),
			array('name' => 'Molfetta Outlet Fashion District Italy', 'image' => 'Molfetta-Outlet-Fashion-District-Italy.jpg','country_id' => 6),
			array('name' => 'Kyoto Tower', 'image' => 'kyoto-tower.jpg','country_id' => 7),
			array('name' => 'Kuil Kinkakuji', 'image' => 'golden_temple-kikankuji.jpg','country_id' => 7),
			array('name' => 'Hutan Bambu Arashiyama', 'image' => 'hutan-bambu.jpg','country_id' => 7),
			array('name' => 'Mino Park', 'image' => 'mino.jpg','country_id' => 7),
			array('name' => 'Kastil Osaka', 'image' => 'Kastil-Osaka.jpg','country_id' => 7),
			array('name' => 'Universal Studios Japan', 'image' => 'Universal-Studios-Japan.jpg','country_id' => 7),
			array('name' => 'Tokyo Tower', 'image' => 'Tokyo-Tower.jpg','country_id' => 7),
			array('name' => 'Gunung Takao', 'image' => 'Takao.jpg','country_id' => 7),
			array('name' => 'Chidorigafuchi', 'image' => 'Chidorigafuchi-Park.jpg','country_id' => 7),
			array('name' => 'Tokyo Disney Land', 'image' => 'disneyland.jpg','country_id' => 7),
			array('name' => 'Shibuya', 'image' => 'Shibuya_Crossing.jpg','country_id' => 7),
			array('name' => 'Aoba Castle', 'image' => 'aoba_castle.jpg','country_id' => 7),
			array('name' => 'Asakusa Kannon Temple', 'image' => 'asakusa_kanon_temple.jpg','country_id' => 7),
			array('name' => 'Mt. Fuji', 'image' => 'mtfuji.jpg','country_id' => 7),
			array('name' => 'Gotemba Premium Outlet', 'image' => 'gotemba.jpg','country_id' => 7),
			array('name' => 'Gyeongbokgung Palace', 'image' => 'gyeongbokgung.jpg','country_id' => 8),
			array('name' => 'Changdeokgung Palace', 'image' => 'changdeokgung-palace.jpg','country_id' => 8),
			array('name' => 'Pulau Jeju', 'image' => 'pulau-Jeju.jpg','country_id' => 8),
			array('name' => 'Namiseom Island', 'image' => 'Nami-Island.jpg','country_id' => 8),
			array('name' => 'Hwaseong Fortress', 'image' => 'Hwasong-Fortress.jpg','country_id' => 8),
			array('name' => 'Hallasan National Park', 'image' => 'Mount-Halla.jpg','country_id' => 8),
			array('name' => 'Seoraksan National Park', 'image' => 'Seoraksan.jpg','country_id' => 8),
			array('name' => 'Myeongdong', 'image' => 'MyeongDong.jpg','country_id' => 8),
			
			// array('name' => '', 'image' => '','country_id' => 8),

		);

		DB::table('destinations')->insert($destinations);
    }
}
