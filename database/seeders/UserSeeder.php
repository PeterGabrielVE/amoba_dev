<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
  
        $json = File::get("database/data/users.json");
        $users = json_decode($json);
  
        foreach ($users as $key => $value) {
            User::create([
                "id" => $value->id,
                "first_name" => $value->first_name,
                "last_name" => $value->last_name,
                "email" => $value->email,
                "remember_token" => $value->remember_token,
                "password" => $value->password,
                "last_online" => $value->last_online,
                "verification_code" => $value->verification_code,
                "new_email" => $value->new_email,
            ]);
        }
    }
}
