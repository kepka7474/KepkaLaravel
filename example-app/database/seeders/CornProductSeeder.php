<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CornProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCornProductIfNotExist('Кока-кола 500мл', 160, 1);
        $this->createCornProductIfNotExist('Кока-кола 1л',220,1);
        $this->createCornProductIfNotExist('Попкорн сладкий 150г',175,2);
        $this->createCornProductIfNotExist('Попкорн сладкий 300г',298,2);
        $this->createCornProductIfNotExist('Попкорн сладкий 500г',360,2);


    }

    public function createCornProductIfNotExist($name, $price, $category_id){
        $corn_product = $this->getCornProductByName($name);
        if (! $corn_product) {
            DB::table('corn_products')->insert([

                'name' => $name,
                'price' => $price,
                'category_id' => $category_id,
            ]);
        }
    }

    private function getCornProductByName(string  $name)
    {
        $corn_product = DB::table('corn_products')
            ->where('name', $name)
            ->first();

        return $corn_product;
    }
}
