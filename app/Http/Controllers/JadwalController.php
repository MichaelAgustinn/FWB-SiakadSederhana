<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecturers;
use App\Models\Schedules;
use App\Models\Student_Courses_310;
use App\Models\Students;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function lihatJadwal()
    {
        $sch = Schedules::with('course.lecturer')->get();
        // $course = Courses::with('lecturer')->get();
        // return view("admin.Jadwal.lihatSc", ["sch" => $sch, 'course' => $course, 'dir' => 'Jadwal > Lihat Jadwal']);
        return view("admin.Jadwal.lihatSc", ["sch" => $sch, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Lihat Jadwal']);
    }

    public function tambahJadwal(Request $request)
    {
        // $sch = Schedules::with("course")->get();
        $sch = Courses::all();
        if ($request->isMethod("post")) {
            $data = new Schedules;
            $data->course_id = $request->course_id;
            $data->day = $request->day;
            $data->start_time = $request->start_time;
            $data->end_time = $request->end_time;
            $data->room = $request->room;
            $data->save();
            return redirect()->route("lihatJadwal")->with("success", "Data berhasil ditambah.");
        }
        return view("admin.Jadwal.tambahSc", ['sch' => $sch, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Tambah Jadwal']);
    }


    public function hapusJadwal(Request $request)
    {
        $data = Schedules::findOrFail($request->id);
        $data->delete();
        return redirect()->route("lihatJadwal")->with("success", "Data berhasil dihapus.");
    }

    public function editJadwal(Request $request)
    {
        // $sch = Schedules::with("course")->get();
        $data = Courses::all();
        $sch = Schedules::findOrFail($request->id);
        if ($request->isMethod("post")) {
            $sch->course_id = $request->course_id;
            $sch->day = $request->day;
            $sch->start_time = $request->start_time;
            $sch->end_time = $request->end_time;
            $sch->room = $request->room;
            $sch->save();
            return redirect()->route("lihatJadwal")->with("success", "Data berhasil ditambah.");
        }
        return view("admin.Jadwal.editSc", ["data" => $data, "sch" => $sch, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Edit Jadwal']);
    }

    // ! JADWAL MAHASISWA AREA
    public function lihatJadwalMhs()
    {
        $data = Student_Courses_310::with('schedule.course')->get();
        return view("admin.JadwalMhs.schMhs", ['data' => $data, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Lihat Jadwal Mahasiswa']);
    }

    public function tambahJadwalMhs(Request $request)
    {
        // $data = Student_Courses_310::with('schedule.course')->get();
        $students = Students::all();
        $schedules = Schedules::all();
        if ($request->isMethod("post")) {
            $data = new Student_Courses_310();
            $data->student_id = $request->student_id;
            $data->schedule_id = $request->schedule_id;
            $data->save();
            return redirect()->route("lihatJadwalMhs")->with("success", "Data berhasil ditambah.");
        }
        return view("admin.JadwalMhs.tambahSchMhs", ['student' => $students, 'schedule' => $schedules, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Tambah Jadwal']);
    }

    public function editJadwalMhs(Request $request)
    {
        // $data = Student_Courses_310::with('schedule.course')->get();
        // $data = Student_Courses_310::findOrFail($request->id)->with('schedule.course')->get();
        $data = Student_Courses_310::with('schedule.course')->findOrFail($request->id);
        $schedules = Schedules::all();
        if ($request->isMethod("post")) {
            $data->student_id = $request->student_id;
            $data->schedule_id = $request->schedule_id;
            $data->save();
            return redirect()->route("lihatJadwalMhs")->with("success", "Data berhasil diubah.");
        }
        return view("admin.JadwalMhs.editSchMhs", ['data' => $data, 'schedule' => $schedules, 'dir' => 'Jadwal', 'dirsub' => 'Jadwal > Tambah Jadwal']);
    }

    public function hapusJadwalMhs(Request $request)
    {
        $data = Student_Courses_310::findOrFail($request->id);
        $data->delete();
        return redirect()->route("lihatJadwalMhs")->with("success", "Data berhasil dihapus.");
    }
}
