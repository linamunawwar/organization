<?php

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
            'name' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt(12345678),
        ]);
        User::create([
            'name' => 'user2',
            'email' => 'user2@user.com',
            'password' => bcrypt(12345678),
        ]);
        User::create([
            'name' => 'user3',
            'email' => 'user3@user.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
