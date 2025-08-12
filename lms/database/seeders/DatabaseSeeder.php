<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\User;
use App\Models\Course;
use App\Models\Professor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Student::factory(100)->create();
        Course::factory(100)->create();
        Professor::factory(10)->create();
    }
}

/* php artisan make:model Student -a --requests
php artisan migrate
php artisan migrate:refresh --seed */