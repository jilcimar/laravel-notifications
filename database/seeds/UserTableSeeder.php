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
            'name' => "Jilcimar",
            'email' => "jil@gmail.com",
            'password' => bcrypt('123456'),
        ]);
    }
}
