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
    public function run(): void
    {
         User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => bcrypt('admin'),
         ]);
    }
}
