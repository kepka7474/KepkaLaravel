<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CornAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAreaIfNotExist('Leninsky', 'LR');
        $this->createAreaIfNotExist('Sovitsky', 'SO');
        $this->createAreaIfNotExist('Kurchtovsky', 'KU');
        $this->createAreaIfNotExist('Kalininsky', 'KA');
        $this->createAreaIfNotExist('Tsentralny', 'CE');
        $this->createAreaIfNotExist('Metallurgichesky', 'CHMZ');
        $this->createAreaIfNotExist('Tractorazovodskoy', 'CHTZ');
    }

    public function createAreaIfNotExist($name, $code){
        $corn_area = $this->getAreaByName($name);
        if (! $corn_area) {
            DB::table('corn_areas')->insert([
                'name' => $name,
                'code' => $code,
            ]);
        }
    }

    private function getAreaByName(string  $name)
    {
        $corn_area = DB::table('corn_areas')
            ->where('name', $name)
            ->first();

        return $corn_area;
    }
}
