<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiakadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students_310')->insert([
            ['nim' => '2001001', 'name' => 'Ahmad Fajar', 'email' => 'ahmad@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2001002', 'name' => 'Budi Santoso', 'email' => 'budi@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2001003', 'name' => 'Citra Dewi', 'email' => 'citra@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('lecturers_310')->insert([
            ['nidn' => '1011001', 'nama_dosen' => 'Dr. Siti Aminah', 'email' => 'siti@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '1011002', 'nama_dosen' => 'Prof. Bambang Wijaya', 'email' => 'bambang@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('courses_310')->insert([
            ['kode_mk' => 'IF101', 'nama_matakuliah' => 'Pemrograman Web', 'sks' => 3, 'id_dosen' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['kode_mk' => 'IF102', 'nama_matakuliah' => 'Struktur Data', 'sks' => 3, 'id_dosen' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('schedules_310')->insert([
            ['course_id' => 1, 'day' => 'Senin', 'start_time' => '08:00:00', 'end_time' => '10:00:00', 'room' => 'Lab 1', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'day' => 'Selasa', 'start_time' => '10:00:00', 'end_time' => '12:00:00', 'room' => 'Lab 2', 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('student_courses_310')->insert([
            ['student_id' => 1, 'schedule_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 2, 'schedule_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 3, 'schedule_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
