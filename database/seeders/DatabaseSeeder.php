<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'Administrator',
            'description' => 'A user who can manage users and access Admin panel.'
        ]);

        $adminUser = User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@fnb.com',
            'password' => Hash::make('admin123'),
        ]);

        $adminUser->assignRole($adminRole);
    }
}
