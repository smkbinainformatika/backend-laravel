<?php

use Illuminate\Database\Seeder;
use App\Agama;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agama1 = Agama::create(['nama_agama'=>'Islam']);
        $agama2 = Agama::create(['nama_agama'=>'Kristen']);
        $agama3 = Agama::create(['nama_agama'=>'Katholik']);
        $agama4 = Agama::create(['nama_agama'=>'Buddha']);
        $agama5 = Agama::create(['nama_agama'=>'Hindu']);
        $agama6 = Agama::create(['nama_agama'=>'Konghuchu']);
    }
}
