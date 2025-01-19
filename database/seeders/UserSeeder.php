<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $english = Language::where('english', 'English')->first();
        User::factory()
            ->hasPosts(24)
            ->create([
                'language_id' => $english->id,
                'name' => 'Admin',
                'slug' => 'admin',
                'email' => 'admin@admin.com',
        ]);

        User::factory()->count(10)->hasPosts(12)->create();
    }
}
