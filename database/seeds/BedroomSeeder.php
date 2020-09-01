<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bedrooms')->insert([
            ['nro'=>201, 'nro_beds' => 1,'size_beds'=>'2 plaza','floor'=>2,'is_bath' => 1,'price' => 30],
            ['nro'=>202, 'nro_beds' => 2,'size_beds'=> '1 1/2 plaza','floor'=>2,'is_bath' => 1,'price' => 35],
            ['nro'=>203, 'nro_beds' => 1,'size_beds'=> '2 plaza','floor'=>2,'is_bath' => 1,'price' => 30],
            ['nro'=>204, 'nro_beds' => 1,'size_beds'=> '1 plaza','floor'=>2,'is_bath' => 0,'price' => 15],
        ]);
    }
}
