<?php

namespace Database\Seeders;

use App\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['administrator', 'editor', 'owner'];

        foreach ($names as $name) {
            Role::factory()->create(['name' => $name]);
        }
    }
}
