<?php

// php artisan make:seeder UserTableSeeder
// php artisan db:seed - para rodar a seed

/*
 * Utilizado mais para quando ja vou trabalhar com um sistema de login e preciso ter um usuario
 */

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('123456')
        ]);

    }
}
