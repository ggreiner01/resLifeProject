<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('Room')->insert(
		['RoomID' => 1, 'BuildingID' => 1, 'FloorID' => 1, 'Capacity' => 1, 'AmountTaken' => 0, 'IsAvailable' => 1, 'YearOfResidenceID' => 1],
		);
    }
}
