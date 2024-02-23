<?php

namespace Database\Seeders;

use App\Models\Associate;
use App\Models\User;
use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->create();
        Associate::factory()
            ->count(10)
            ->create();
    }
}
