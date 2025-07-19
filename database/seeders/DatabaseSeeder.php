<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Client;
use App\Models\Representative;
use App\Models\RepresentativeClient;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        City::factory(10)->create();
        Client::factory(100)->create();
        Representative::factory(10)->create();
        RepresentativeClient::factory(10)->create();
    }
}
