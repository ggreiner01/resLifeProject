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
        DB::table('Floor')->insert(array(
    		['FloorID' => 1, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial First Floor'],
			['FloorID' => 2, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Second Floor'],
			['FloorID' => 3, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Third Floor'],
			['FloorID' => 4, 'BuildingID' => 1, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Centennial Fourth Floor'],
			['FloorID' => 5, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Lower Floor'],
			['FloorID' => 6, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Second Floor'],
			['FloorID' => 7, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Third Floor'],
			['FloorID' => 8, 'BuildingID' => 2, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Davis Fourth Floor'],
			#Weird case for jenks east first floor, they have suits in there
			['FloorID' => 9,  'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks East First Floor'],
			['FloorID' => 10, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks East Second Floor'],
			['FloorID' => 11, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks East Third Floor'],
			['FloorID' => 12, 'BuildingID' => 3, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks East Fourth Floor'],
			
			['FloorID' => 13, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks West First Floor'],
			['FloorID' => 14, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 3, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks West Second Floor'],
			['FloorID' => 15, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 3, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks West Third Floor'],
			['FloorID' => 16, 'BuildingID' => 4, 'IsAvailable' => 1, 'Gender' => 3, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Jenks West Fourth Floor'],
			#Mem does not have a lower floor on the excel spread sheet
			#['FloorID' => 17, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Lower Floor'],
			#Mem first floor is weard, we may need to split it into two tables
			['FloorID' => 17, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 3, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial First Floor'],
			['FloorID' => 18, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Second Floor'],
			['FloorID' => 19, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Third Floor'],
			['FloorID' => 20, 'BuildingID' => 5, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Memorial Fourth Floor'],
			['FloorID' => 21, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins East Lower Floor'],
			['FloorID' => 22, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins East First Floor'],
			['FloorID' => 23, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins East Second Floor'],
			['FloorID' => 24, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins East Third Floor'],
			['FloorID' => 25, 'BuildingID' => 6, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins East Fourth Floor'],
			
			['FloorID' => 26, 'BuildingID' => 7, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins West Lower Floor'],
			['FloorID' => 27, 'BuildingID' => 7, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins West First Floor'],
			['FloorID' => 28, 'BuildingID' => 7, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins West Second Floor'],
			['FloorID' => 29, 'BuildingID' => 7, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins West Third Floor'],
			['FloorID' => 30, 'BuildingID' => 7, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Watkins West Fourth Floor'],
			
			['FloorID' => 32, 'BuildingID' => 8, 'IsAvailable' => 0, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson First Floor'],
			['FloorID' => 33, 'BuildingID' => 8, 'IsAvailable' => 1, 'Gender' => 2, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Second Floor'],
			['FloorID' => 34, 'BuildingID' => 8, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Third Floor'],
			['FloorID' => 31, 'BuildingID' => 8, 'IsAvailable' => 1, 'Gender' => 1, 'YearOfResidenceID' => 1, 'FloorDescription' => 'Wilkinson Lower Floor']
			)
		);
    }
}