<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Deni";
        $user->email = "deni@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
