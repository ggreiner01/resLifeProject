<?php

use Illuminate\Database\Seeder;

class YearOfResidnceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('YearOfResidence')->insert(array(
            ['Year' => 2019],
            ['Year' => 2020]
            )
        );
    }
    
}
