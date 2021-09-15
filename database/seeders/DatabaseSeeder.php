<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => '管理員',
            'username' => env('ADMIN_USERNAME'),
            'email' => 'admin@test.com',
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'is_admin' => 1,
        ]);
    }
}
