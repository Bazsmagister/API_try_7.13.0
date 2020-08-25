<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and
        // let's hash it before the loop, or else our seeder
        // will be too slow.
        // $password = Hash::make('adminadmin');


        // User::create([
        //     'name' => 'adminadmin',
        //     'email' => 'admin@admin.com',
        //     // 'password' => $password,
        //     'password' => 'adminadmin'
        // ]);



        // // And now let's generate a few dozen users for our app:
        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => $password,
        //     ]);
        // }

        // $admi = User::create([
        //     'name' => 'adminadmin',
        //     'email' => 'admin@admin.com',
        //     // 'password' => $password,
        //     'password' =>  bcrypt('adminadmin'),
        // ]);

        // $authuse = User::create([
        //     'name' => 'authuser',
        //     'email' => 'authuser@authuser.com',
        //     'password' =>  bcrypt('authuser'),
        // ]);

        $admin = factory(\App\User::class)->create([
            'id'    => '1',
            'name'  => 'Admin Adam',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            // 'phone' => '0623232565321',
        ]);

        $authuser = factory(\App\User::class)->create([
            'id'    => '2',
            'name'  => 'Dr. Authenticated User',
            'email' => 'authuser@authuser.com',
            'password' => bcrypt('authuser'),
            // 'phone' => '0623232565322',
        ]);
    }
}
