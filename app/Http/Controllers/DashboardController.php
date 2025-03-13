<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecturers;
use App\Models\Schedules;
use App\Models\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        // $course = Courses::all(); // Ambil semua data dari tabel post
        // $dosen = Lecturers::all();
        // return view('admin.dash', ['course' => $course, 'dosen' => $dosen, 'dir' => 'Dashboard']);
        $sch = Schedules::with('course.lecturer')->get();
        $course = Courses::with('lecturer')->get();
        $mhs = Students::all();
        // dd($matakuliah);
        return view('admin.dash', ['sch' => $sch, 'course' => $course, 'mhs' => $mhs, 'dirsub' => 'Dashboard', 'dir' => 'Dashboard']);
    }
}
