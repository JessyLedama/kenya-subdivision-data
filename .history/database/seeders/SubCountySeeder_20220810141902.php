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
                'name' => 'Rabai',
                'county_id' => '3',
            ],

            [
                'name' => 'Kaloleni',
                'county_id' => '3',
            ],

            [
                'name' => 'Bura',
                'county_id' => '4',
            ],

            [
                'name' => 'Galole',
                'county_id' => '4',
            ],

            [
                'name' => 'Garsen',
                'county_id' => '4',
            ],

            [
                'name' => 'Lamu East',
                'county_id' => '5',
            ],

            [
                'name' => 'Lamu West',
                'county_id' => '5',
            ],

            [
                'name' => 'Voi',
                'county_id' => '6',
            ],

            [
                'name' => 'Mwatate',
                'county_id' => '6',
            ],

            [
                'name' => 'Wundanyi',
                'county_id' => '6',
            ],

            [
                'name' => 'Taveta',
                'county_id' => '6',
            ],

            [
                'name' => 'Fafi',
                'county_id' => '7',
            ],

            [
                'name' => 'Garissa',
                'county_id' => '7',
            ],

            [
                'name' => 'Ijara',
                'county_id' => '7',
            ],

            [
                'name' => 'Lagdera',
                'county_id' => '7',
            ],

            [
                'name' => 'Dadaab',
                'county_id' => '7',
            ],

            [
                'name' => 'Balambala',
                'county_id' => '7',
            ],

            [
                'name' => 'Hulugho',
                'county_id' => '7',
            ],

            [
                'name' => 'Buna',
                'county_id' => '8',
            ],

            [
                'name' => 'Eldas',
                'county_id' => '8',
            ],

            [
                'name' => 'Habaswein',
                'county_id' => '8',
            ],

            [
                'name' => 'Tarbaj',
                'county_id' => '8',
            ],

            [
                'name' => 'Wajir East',
                'county_id' => '8',
            ],

            [
                'name' => 'Wajir North',
                'county_id' => '8',
            ],

            [
                'name' => 'Wajir South',
                'county_id' => '8',
            ],

            [
                'name' => 'Wajir West',
                'county_id' => '8',
            ],

            [
                'name' => 'Banissa',
                'county_id' => '9',
            ],

            [
                'name' => 'Lafey',
                'county_id' => '9',
            ],

            [
                'name' => 'Mandera East',
                'county_id' => '9',
            ],

            [
                'name' => 'Mandera North',
                'county_id' => '9',
            ],

            [
                'name' => 'Mandera South',
                'county_id' => '9',
            ],

            [
                'name' => 'Mandera West',
                'county_id' => '9',
            ],

            [
                'name' => 'Laisamis',
                'county_id' => '10',
            ],

            [
                'name' => 'Moyale',
                'county_id' => '10',
            ],

            [
                'name' => 'North Horr',
                'county_id' => '10',
            ],

            [
                'name' => 'Saku',
                'county_id' => '10',
            ],

            [
                'name' => 'Garbatulla',
                'county_id' => '11',
            ],

            [
                'name' => 'Isiolo',
                'county_id' => '11',
            ],

            [
                'name' => 'Merti',
                'county_id' => '11',
            ],

            [
                'name' => 'Buuri East',
                'county_id' => '12',
            ],

            [
                'name' => 'Buuri West',
                'county_id' => '12',
            ],

            [
                'name' => 'Igembe North',
                'county_id' => '12',
            ],

            [
                'name' => 'Igembe Central',
                'county_id' => '12',
            ],

            [
                'name' => 'Igembe South',
                'county_id' => '12',
            ],

            [
                'name' => 'Buuri East',
                'county_id' => '12',
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
