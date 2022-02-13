<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Task::factory(25)->create();
         \App\Models\Category::factory()->create(['category' => 'PHP']);
         \App\Models\Category::factory()->create(['category' => 'JavaScript']);
         \App\Models\Category::factory()->create(['category' => 'CSS']);
        
         \App\Models\CategoryTask::factory(35)->create();
    }
}
