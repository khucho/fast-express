<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'branch-manager']
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'password' => Hash::make('password'),
            'phone_no' => '09265060572',
            'role_id' => 1,
            'contact_no' => '09265060572',
            'status' => 1,
        ]);
    }
}
