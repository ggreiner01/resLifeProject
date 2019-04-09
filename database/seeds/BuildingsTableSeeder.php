<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Building')->insert(array(
        ['BuildingID' => 1, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Centennial'],

        ['BuildingID' => 2, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Davis'],
    
        ['BuildingID' => 3, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Jenks East'],
    
        ['BuildingID' => 4, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Jenks West'],

        ['BuildingID' => 5, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Memorial'],

        ['BuildingID' => 6, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Watkins East'],
    
        ['BuildingID' => 7, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Watkins West'],

        ['BuildingID' => 8, 'IsAvailable' => 1, 'YearOfResidenceID' => 1, 'BuildingDescription' => 'Wilkinson']
        )
	);
    }
}
