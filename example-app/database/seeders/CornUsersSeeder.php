<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CornUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCornUserIfNotExist('Vasya@yandex.ru', 'Vasya', 111);
        $this->createCornUserIfNotExist('Sanya@yandex.ru', 'Sanya', 222);
        $this->createCornUserIfNotExist('Petya@yandex.ru', 'Petya',333);
    }

    public function createCornUserIfNotExist($email, $name, $password){
        $corn_user = $this->getCornUserByName($email);
        if (! $corn_user) {
            DB::table('corn_users')->insert([
                'email' => $email,
                'name' => $name,
                'password' => $password
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
