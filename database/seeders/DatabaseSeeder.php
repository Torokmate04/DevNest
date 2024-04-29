<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\ProgLang;
use App\Models\School;
use App\Models\Types;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            SchoolSeeder::class
        );
        School::factory()->create([
            'name' => 'BMSZC Bláthy Ottó Titusz Informatikai Technikum',
            'address' => 'Budapest, Bécsi út 134, 1032',
            'contact_name' => 'Krucsay Attila',
            'contact_email' => 'krucsay.attila@gmail.com',
        ]);
        School::factory()->create([
            'name' => 'BGSZC Eötvös Loránd Technikum',
            'address' => 'Budapest, Török Flóris u. 89, 1204',
            'contact_name' => 'Szénási Zsolt',
            'contact_email' => 'zsolt.szenasi@gmail.com',
        ]);


        \App\Models\User::factory(30)->create();

        \App\Models\User::factory()->create([
            'username' => 'TestU',
            'fullname' => 'Test User',
            'email' => 'test@example.com',
            'password' => 1234,
            'school_id' => 1,
            "role" => 1,
            'active' => true,
        ]);


        Types::factory()->create([
            'type' => 'Web development',
            'slug' => 'webdev',
        ]);
        Types::factory()->create([
            'type' => 'Desktop App Development',
            'slug' => 'appdev',
        ]);
        Types::factory()->create([
            'type' => 'Mobile App Development',
            'slug' => 'mobiledev',
        ]);

        $this->call(CourseSeeder::class);

        Course::factory()->create([
            'name' => 'PHP basics',
            'level' => 'begginer',
            'c_route' => '.php_basics',
            'type_id' => 1,
        ]);
        Course::factory()->create([
            'name' => 'C# basics',
            'level' => 'begginer',
            'c_route' => '.c#_basics',
            'type_id' => 2,
        ]);
        Course::factory()->create([
            'name' => 'Java basics',
            'level' => 'begginer',
            'c_route' => '.java',
            'type_id' => 3,
        ]);
        Course::factory()->create([
            'name' => 'Phython basics',
            'level' => 'begginer',
            'c_route' => '.phython',
            'type_id' => 3,
        ]);
        Course::factory()->create([
            'name' => 'Javascript zero to hero',
            'level' => 'advanced',
            'c_route' => '.javascript_zero_to_hero',
            'type_id' => 3,
        ]);
        ProgLang::factory()->create([
            'name' => 'python',
            'description' => 'python leiras',
            'type_id' => 1,
            'usercount' => 20,
            'course_id' => 3
        ]); 
        ProgLang::factory()->create([
            'name' => 'javascript',
            'description' => 'Javascript leiras',
            'type_id' => 1,
            'usercount' => 20,
            'course_id' => 3
        ]); 
        ProgLang::factory()->create([
            'name' => 'java',
            'description' => 'Java leiras',
            'type_id' => 1,
            'usercount' => 20,
            'course_id' => 3
        ]); 
        ProgLang::factory()->create([
            'name' => 'csharp',
            'description' => 'C# leiras',
            'type_id' => 1,
            'usercount' => 20,
            'course_id' => 3
        ]); 

        ProgLang::factory()->create([
            'name' => 'php',
            'description' => 'PHP leiras',
            'type_id' => 1,
            'usercount' => 20,
            'course_id' => 3
        ]); 

        
    }
}
