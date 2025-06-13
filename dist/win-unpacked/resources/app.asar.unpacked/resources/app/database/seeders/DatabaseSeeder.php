<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
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

        Client::factory()
            ->count(5)
            ->hasProjectGroups(2)
            ->create()
            ->each(function ($client) {
                $client->projectGroups->each(function ($pg) {
                    $pg->tasks()->saveMany(\App\Models\Task::factory()->count(4)->make());
                });
        });
    }
}
