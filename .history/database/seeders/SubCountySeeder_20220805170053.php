<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCounty;

class SubCountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCountiesData = [
            [
                'name' => 'Changamwe',
                'county_id' => '1',
            ],

            [
                'name' => 'Jomvu',
                'county_id' => '1',
            ],

            [
                'name' => 'Kisauni',
                'county_id' => '1',
            ],

            [
                'name' => 'Nyali',
                'county_id' => '1',
            ],

            [
                'name' => 'Likoni',
                'county_id' => '1',
            ],

            [
                'name' => 'Mvita',
                'county_id' => '1',
            ],

            [
                'name' => 'Matuga',
                'county_id' => '2',
            ],

            [
                'name' => 'Msambweni',
                'county_id' => '2',
            ],

            [
                'name' => 'Kinango',
                'county_id' => '2',
            ],

            [
                'name' => 'Lunga Lunga',
                'county_id' => '2',
            ],

            [
                'name' => 'Kilifi',
                'county_id' => '3',
            ],

            [
                'name' => 'Ganze',
                'county_id' => '3',
            ],

            [
                'name' => 'Malindi',
                'county_id' => '3',
            ],

            [
                'name' => 'Magarini',
                'county_id' => '3',
            ],

            [
                'name' => 'Kilifi',
                'county_id' => '3',
            ],
        ];

        $subCounties = SubCounty::all();
        
        if(count($subCounties) < 1){
            foreach($subCountiesData as $subCounty)
            {
                SubCounty::create($subCounty);
            }
        }
    }
}
