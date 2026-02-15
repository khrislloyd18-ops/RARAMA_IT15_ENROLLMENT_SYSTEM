<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'course_code' => 'IT101',
            'course_name' => 'Introduction to Programming',
            'capacity' => 30
        ]);

        Course::create([
            'course_code' => 'IT102',
            'course_name' => 'Web Development',
            'capacity' => 25
        ]);

        Course::create([
            'course_code' => 'IT103',
            'course_name' => 'Database Management',
            'capacity' => 20
        ]);
    }
}