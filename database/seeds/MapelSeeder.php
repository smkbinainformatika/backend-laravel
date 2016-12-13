<?php

use Illuminate\Database\Seeder;
use App\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel1 = Mapel::create(['nama_mapel'=>'Algoritma & Pemrograman Dasar']);
    }
}
