<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'Gerardo Cordova',
            'email' => 'gerardocordova15@gmail.com',
        ])->assignRole('admin');
        //User::factory(9)->create();
        $this->call(AdditionalSeeder::class);

         
    
    }
}
