<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // Tabel students
        Schema::create('students_310', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });

        // Tabel Dosen
        Schema::create('lecturers_310', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique();
            $table->string('nama_dosen');
            $table->string('email')->unique();
            $table->timestamps();
        });

        // Tabel Mata Kuliah
        Schema::create('courses_310', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk')->unique();
            $table->string('nama_matakuliah');
            $table->integer('sks');
            $table->foreignId('id_dosen')->constrained('lecturers_310')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel Jadwal Mata Kuliah
        Schema::create('schedules_310', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses_310')->onDelete('cascade');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('room');
            $table->timestamps();
        });

        // Tabel Mahasiswa Mengambil Mata Kuliah
        Schema::create('student_courses_310', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students_310')->onDelete('cascade');
            $table->foreignId('schedule_id')->constrained('schedules_310')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('lecturers');
        Schema::dropIfExists('students');
    }
};
