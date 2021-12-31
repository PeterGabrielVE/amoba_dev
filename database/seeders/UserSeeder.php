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
                "status" => $value->status,
                "first" => $value->first,
                "last_accept_date" => $value->last_accept_date,
                "created" => $value->created,
                "modified" => $value->modified,
                "company_contact" => $value->company_contact,
                "credits" => $value->credits,
                "first_trip" => $value->first_trip,
                "modified" => $value->modified,
                "incomplete_profile" => $value->incomplete_profile,
                "phone_verify" => $value->phone_verify,
                "token_auto_login" => $value->token_auto_login,
                "user_vertical" => $value->user_vertical,
                "language_id" => $value->language_id,
                "no_registered" => $value->no_registered,
                "deleted_at" => $value->deleted_at,
            ]);
        }
    }
}
