<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "John";
        $user->email= "john@gmail.com";
        $user->password=Hash::make("123456");
        $user->save();

        $user = new User();
        $user->name = "Janny";
        $user->email= "janny@gmail.com";
        $user->password=Hash::make("123456");
        $user->save();

        $user = new User();
        $user->name = "Kate";
        $user->email= "Kate@gmail.com";
        $user->password=Hash::make("123456");
        $user->save();
    }
}
