<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'role' => 'admin',
                    'status' => 'active',
                    'password' => Hash::make('saidsaber')
                ],
                [
                    'name' => 'said',
                    'email' => 'said@email.com',
                    'role' => 'web',
                    'status' => 'active',
                    'password' => Hash::make('saidsaber')
                ],
            ]
        );
    }
}
