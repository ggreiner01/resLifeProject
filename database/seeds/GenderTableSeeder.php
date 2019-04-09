<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Gender')->insert(array(
            ['Gender' => 'M'],
            ['Gender' => 'F'],
            ['Gender' => 'N']
            )
        );
    }
}
