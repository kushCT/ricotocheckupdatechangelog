<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Application::factory()->times(5)->create();
    }
}
