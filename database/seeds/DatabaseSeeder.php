<?php

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
        $this->call(RoleSeeder::class);
        // $this->call(ProvincesSeeder::class);
        // $this->call(CitiesSeeder::class);
        // $this->call(DistrictsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SchoolYearsSeeder::class);
        $this->call(MajorsSeeder::class);
        $this->call(EntryTypesSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(StudentDetailsSeeder::class);
        $this->call(PositionTypesSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(StaffsSeeder::class);
        $this->call(TeacherPositionsSeeder::class);
        $this->call(StaffPositionsSeeder::class);
        $this->call(GradeLevelsSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(TeacherSubjectsSeeder::class);
        $this->call(StudentRegistrationSeeder::class);
        $this->call(StudentClassSeeder::class);
        
    }
}
