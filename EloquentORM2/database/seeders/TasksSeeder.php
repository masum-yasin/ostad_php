<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::truncate();
       for($i = 0; $i<10; $i++){
         Task::create([
        'title' => fake()->sentence(20),
        'description' => fake()->sentence(30),
        'due_date' => now()->addDays(rand(1,7)),
    ]);
       }
        
    }
}
