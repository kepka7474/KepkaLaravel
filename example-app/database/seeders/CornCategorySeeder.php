<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CornCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCornCategoryIfNotExist('Напитки');
        $this->createCornCategoryIfNotExist('Попкорн');
        $this->createCornCategoryIfNotExist('Шоколад');
        $this->createCornCategoryIfNotExist('Закуски');

    }

    public function createCornCategoryIfNotExist($name){
        $corn_category = $this->getCornCategoryByName($name);
        if (! $corn_category) {
            DB::table('corn_categories')->insert([

                'name' => $name,
            ]);
        }
    }

    private function getCornCategoryByName(string  $name)
    {
        $corn_category = DB::table('corn_categories')
            ->where('name', $name)
            ->first();

        return $corn_category;
    }
}
