<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'password' => Hash::make('admin123')
        ]);
    }
}
