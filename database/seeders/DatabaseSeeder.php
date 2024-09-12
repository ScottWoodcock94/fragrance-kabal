<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('user')->insert([
            ['email' => 'mr_bean', 'password' => 'password', 'username' => 'mr_bean1'],
            ['email' => 'tom_cruise', 'password' => 'password', 'username' => 'tom_cruise1']
        ]);
    }
}
