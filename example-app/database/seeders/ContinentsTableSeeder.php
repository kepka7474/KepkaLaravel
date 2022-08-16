<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createContinentIfNotExists('Asia', 'AS');
        $this->createContinentIfNotExists('Africa', 'AF');
        $this->createContinentIfNotExists('America', 'AM');

    }
    private function createContinentIfNotExists(string $name, string $code): void
    {
        $continent = $this->getContinentByName($name);
        if (! $continent) {
            DB::table('continents')->insert([
                'name' => $name,
                'code' => $code,
            ]);
        }
    }
    private function getContinentByName(string  $name)
    {
        $continent = DB::table('continents')
            ->where('name', $name)
            ->orWhere('code', $name)
//            ->first();
            ->toSql();
        dd($continent);
        return$continent;
    }
}
