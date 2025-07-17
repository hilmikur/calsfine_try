<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hanya jalankan DummyDataSeeder di lingkungan lokal
        if ($this->app->environment('local')) {
            $this->call([
                DummyDataSeeder::class,
            ]);
        }

        $this->call([
            AdminSeeder::class,
        ]);
    }
}
