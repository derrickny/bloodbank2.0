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
            'full_name' => $faker->firstName,
            'email' => "test@admin.com",
            'password' => bcrypt('password'),
            'gender' => 'male',
            'phone_no' =>'072100000',
            'role' => 1
        ]);
    }
}
