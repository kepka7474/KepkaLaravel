<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CornUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCornUserIfNotExist('Vasya@yandex.ru', 'Vasya');
        $this->createCornUserIfNotExist('Sanya@yandex.ru', 'Sanya');
        $this->createCornUserIfNotExist('Petya@yandex.ru', 'Petya');
    }

    public function createCornUserIfNotExist($email, $name){
        $corn_user = $this->getCornUserByName($email);
        if (! $corn_user) {
            DB::table('corn_users')->insert([
                'email' => $email,
                'name' => $name,
            ]);
        }
    }

    private function getCornUserByName(string  $email)
    {
        $corn_user = DB::table('corn_users')
            ->where('email', $email)
            ->first();

        return $corn_user;
    }
}
