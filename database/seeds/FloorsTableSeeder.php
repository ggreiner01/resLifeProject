<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Floor')->insert(
    ['FloorID' => 1, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial First Floor'],
	['FloorID' => 2, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Second Floor'],
	['FloorID' => 3, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Third Floor'],
	['FloorID' => 4, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Fourth Floor'],
	['FloorID' => 5, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Lower Floor'],
	['FloorID' => 6, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Second Floor'],
	['FloorID' => 7, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Third Floor'],
	['FloorID' => 8, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Fourth Floor'],
	['FloorID' => 9, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks First Floor'],
	['FloorID' => 10, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks Second Floor'],
	['FloorID' => 11, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks Third Floor'],
	['FloorID' => 12, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks Fourth Floor'],
	['FloorID' => 13, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Lower Floor'],
	['FloorID' => 14, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial First Floor'],
	['FloorID' => 15, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Second Floor'],
	['FloorID' => 16, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Third Floor'],
	['FloorID' => 17, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Fourth Floor'],
	['FloorID' => 18, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins Lower Floor'],
	['FloorID' => 19, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins First Floor'],
	['FloorID' => 20, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins Second Floor'],
	['FloorID' => 21, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins Third Floor'],
	['FloorID' => 22, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins Fourth Floor'],
	['FloorID' => 23, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson First Floor'],
	['FloorID' => 24, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Second Floor'],
	['FloorID' => 25, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Third Floor'],
	['FloorID' => 26, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Fourth Floor']
	);
    }
}
