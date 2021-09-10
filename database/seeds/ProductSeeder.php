<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'CHELSEA 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'chelsea.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'LEICESTER CITY HOME 2018-2019',
            'liga_id' => 2,
            'gambar' => 'leicester.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'MAN. UNITED AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'mu.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'LIVERPOOL AWAY 2018-2019',
            'liga_id' => 2,
            'gambar' => 'liverpool.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'TOTTENHAM 3RD 2018-2019',
            'liga_id' => 2,
            'gambar' => 'tottenham.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'DORTMUND AWAY 2018-2019',
            'liga_id' => 1,
            'gambar' => 'dortmund.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'BAYERN MUNCHEN 3RD 2018 2019',
            'liga_id' => 1,
            'gambar' => 'munchen.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'JUVENTUS AWAY 2018-2019',
            'liga_id' => 4,
            'gambar' => 'juve.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'AS ROMA HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'asroma.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'AC MILAN HOME 2018 2019',
             'liga_id' => 4,
            'gambar' => 'acmilan.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'LAZIO HOME 2018-2019',
            'liga_id' => 4,
            'gambar' => 'lazio.png'
        ]);

        DB::table('products')->insert([
        	'name' => 'REAL MADRID 3RD 2018-2019',
            'liga_id' => 3,
            'gambar' => 'madrid.png'
        ]);
    }
}