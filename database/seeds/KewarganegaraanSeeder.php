<?php

use Illuminate\Database\Seeder;

class KewarganegaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kewarganegaraan')->insert([
            'id' => 'KN-01',
        	'nama' => 'indonesia'
        ]);
    }
}
