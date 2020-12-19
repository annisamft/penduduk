<?php

use Illuminate\Database\Seeder;

class JorongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jorong')->insert([
        	'nama' => '10koto',
        	'nagari_id' => '1'
        ]);
    }
}
