<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;



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
        $password = Hash::make('myPass123');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@bham.store',
            'firstname' => 'Admin',
            'surname' => 'Istrator',
            'phone_number' => '01233234459',
            'date_of_birth' => '1996-05-28',
            'password' => $password,
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'firstname' => $faker->name,
                'surname' => $faker->name,
                'phone_number' => $faker->e164PhoneNumber,
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
