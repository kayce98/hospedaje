<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'people_id' => 1,
            'role_id' => 1,
            'password' => bcrypt('admin12345'),
            'remember_token' => Str::random(10),
        ]);
    }
}
