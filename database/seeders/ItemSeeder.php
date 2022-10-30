<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'Nama_Barang' => 'Iphone 20 Pro Max ',
            'Details' => 'Size	6.5 inches, 102.0 cm2 (~81.7% screen-to-body ratio)
                Resolution	720 x 1600 pixels, 20:9 ratio (~270 ppi density)
                Protection	Corning Gorilla Glass
                PLATFORM	OS	Android 10, Realme UI
                Chipset	MediaTek MT6765G Helio G35 (12 nm)
                CPU	Octa-core (4x2.3 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)
                GPU	PowerVR GE8320
                MEMORY	Card slot	microSDXC (dedicated slot)
                Internal	32GB 3GB RAM, 64GB 3GB RAM, 64GB 4GB RAM, 128GB 4GB RAM               
                ',
            'Harga'    => 'RP. 19.000.000,00',
            'Stok'     => '99',
            'Terjual'  => '23',
            ]
            ,
            [
                'Nama_Barang' => 'Kulkas 5 pintu',
                'Details' => 'Kulkas 5 pintu adalah kulkas yang terbuat dari baja dan berlian
                dengan suhu mencapai -100 derajat celcius yang sangat dingin seperti dia',
                'Harga' => 'Rp. 100.000.000',
                'Stok'  => '1',
                'Terjual' => '50',
            ]
        ]);
    }
}
