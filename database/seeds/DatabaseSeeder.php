<?php

use Illuminate\Database\Seeder;

use \App\User;
//use \App\Userinfo;
use \App\Service;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Service::truncate();
//        Userinfo::truncate();

//        factory(User::class)->create([
//            'name' => 'Admin',
//            'email' => 'admin@mail.com',
//        ]);

        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@mail.com',
        ]);

        factory(Service::class, 10)->create();
//        factory(Userinfo::class, 20)->create();
    }


}
