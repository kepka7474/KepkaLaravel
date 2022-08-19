<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ContinentSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(CornAreaSeeder::class);
        $this->call(CornCategorySeeder::class);
        $this->call(CornOrderSeeder::class);
        $this->call(CornUserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
