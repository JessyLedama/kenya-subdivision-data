<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\County;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countiesData = [
            [
                'county_code' => '001',
                'county_name' => 'Mombasa',
            ],

            [
                'county_code' => '002',
                'county_name' => 'Kwale',
            ],

            [
                'county_code' => '003',
                'county_name' => 'Kilifi',
            ],

            [
                'county_code' => '004',
                'county_name' => 'Tana River',
            ],

            [
                'county_code' => '005',
                'county_name' => 'Lamu',
            ],

            [
                'county_code' => '006',
                'county_name' => 'Taita/Taveta',
            ],

            [
                'county_code' => '007',
                'county_name' => 'Garissa',
            ],

            [
                'county_code' => '008',
                'county_name' => 'Wajir',
            ],

            [
                'county_code' => '009',
                'county_name' => 'Mandera',
            ],

            [
                'county_code' => '010',
                'county_name' => 'Marsabit',
            ],

            [
                'county_code' => '011',
                'county_name' => 'Isiolo',
            ],

            [
                'county_code' => '012',
                'county_name' => 'Meru',
            ],

            [
                'county_code' => '013',
                'county_name' => 'Tharaka-Nithi',
            ],

            [
                'county_code' => '002',
                'county_name' => 'Kwale',
            ],
        ];
        
        foreach($countiesData as $county)
        {
            County::create($county);
        }
    }
}