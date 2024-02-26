<?php

namespace Database\Seeders;

use App\Models\Authors\Author;
use App\Models\Books\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Author::factory(5)->create();
        Book::factory(30)->create();

         User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => bcrypt('admin'),
         ]);
    }
}
