<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $faker = Faker::create();

        $user->name = 'bob';
        $user->email = 'bob@bob.com';
        $user->password = md5('password');
        $user->client_token = $faker->sha1;
        $user->access_token = $faker->sha1;
        $user->refresh_token = $faker->sha1;
        $user->save();
    }
}