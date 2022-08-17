<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCountryIfNotExists('Asia', 'AS');
        $this->createCountryIfNotExists('Africa', 'AF');
        $this->createCountryIfNotExists('America', 'AM');

    }
    private function createCountryIfNotExists(string $name, string $continent_name): void
    {
        $continent = $this->getCountryByName($name);
        if (! $continent) {
            DB::table('countries')->insert([
                'name' => $name,
                'continent_name' => $continent_name,
            ]);
        }
    }
    private function getCountryByName(string  $name)
    {
        $continent = DB::table('countries')
            ->where('name', $name)
//            ->orWhere('$continent_name', $name)
            ->first();
//            ->toSql();
//        dd($continent);
        return$continent;
    }
}
