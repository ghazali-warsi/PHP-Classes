<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Student::Factory()->count(100)->create();

        $this->call(
            [
                EmployeeSeeder::class
            ]
        );
        
    }
}


// seeding  
// Data insert to the database 
// seeders  real data / fake data  
// factory  fake data diiference let suppose two table ( relation between these tables )  

// work on seeders 
// 1) Creata a migration and migrate to the database 
// 2) create model of table which created by migration file  
// 3) Create seeder file 
// 4) Call seeder file in databaseSeeder file 
// 5) command run (php artisan db:seed )


// work on Factory 
// 1) Creata a migration and migrate to the database 
// 2) create model of table which created by migration file  
// 3) Create factory file 
// 4) Call factory file in databaseSeeder file 
// 5) command run (php artisan db:seed )