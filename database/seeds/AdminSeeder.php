<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Admins')->insert(array(
            ['Pos' => 'Normal'],
            ['Pos' => 'Admin']
            )
            );
    }
}
