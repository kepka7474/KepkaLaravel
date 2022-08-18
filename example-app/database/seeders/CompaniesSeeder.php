<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (City::all() as $city) {
            Company::factory(rand(1,4))->create([
                'city_id' => $city,
                'url'=>'1',
                'description'=>'2'
            ]);
        }
    }
}
