<?php

use Illuminate\Database\Seeder;

class NagariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nagari')->insert([
        	'nama' => 'simabua'
        ]);
    }
}
