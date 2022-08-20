<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createContinentIfNotExist('Asia', 'AS');
        $this->createContinentIfNotExist('Europe', 'Eu');
        $this->createContinentIfNotExist('Africa', 'Af');
    }

    public function createContinentIfNotExist($name, $code){
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
            ->first();

        return $continent;
    }
}
