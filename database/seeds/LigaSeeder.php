<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'name' => 'Bundes Liga',
        	'negara' => 'Jerman',
        	'gambar' => 'bundesliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Premier League',
        	'negara' => 'Inggris',
        	'gambar' => 'premierleague.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'La Liga',
        	'negara' => 'Spanyol',
        	'gambar' => 'laliga.png',
        ]);

        DB::table('ligas')->insert([
        	'name' => 'Serie A',
        	'negara' => 'Itali',
        	'gambar' => 'seriea.png',
        ]);
    }
}