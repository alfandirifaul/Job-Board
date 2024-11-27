<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
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
        User::factory(3000)->create();

        $users = User::all()->shuffle();

        for($i = 0; $i < 400; $i++){
            Employer::factory()->create([
               'user_id' => $users->pop()->id
            ]);
        }

        $employers = Employer::all();
        for($i = 0; $i < 1000; $i++){
            Job::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }

//        Job::factory(1000)->create();
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
