<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        User::create([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => "test@admin.com",
            'password' => bcrypt('password'),
            'gender' => 'male',
            'role' => 1
        ]);
    }
}
