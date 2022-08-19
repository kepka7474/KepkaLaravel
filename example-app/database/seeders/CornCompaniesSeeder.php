<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\CornCompanies;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CornCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Country::all() as $country) {
            CornCompanies::factory(10);
        }
    }
}
