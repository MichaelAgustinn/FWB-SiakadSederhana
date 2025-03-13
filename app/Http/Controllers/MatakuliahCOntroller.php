<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecturers;
use Illuminate\Http\Request;

class MatakuliahCOntroller extends Controller
{
    public function LihatMk()
    {
        $matakuliah = Courses::ambilDataMatakuliah();
        return view('admin.MK.lihatMK', ['matakuliah' => $matakuliah, 'dir' => 'Mata Kuliah', 'dirsub' => 'Lihat Mata Kuliah']);
    }
    public function LihatMkku()
    {

        // $matakuliah = Courses::all(); // Ambil semua data dari tabel post
        $matakuliah = Courses::with('dosen')->get();
        // dd($matakuliah);
        return view('admin.MK.lihatMKku', compact('matakuliah'));

        //  return view('courses.index'); // Kirim data ke view
    }
    public function LihatMksendiri($id)
    {

        // $matakuliah = Courses::all(); // Ambil semua data dari tabel post
        $matakuliah = Lecturers::with('matakuliah')->find($id);
        // dd($matakuliah);
        return view('admin.lihatMKsendiri', compact('matakuliah'));

        //  return view('courses.index'); // Kirim data ke view
    }
    public function TambahMk()
    {
        $dosen = Lecturers::all();

        return view('admin.MK.tambahMk', ['dosen' => $dosen, 'dir' => 'Mata Kuliah', 'dirsub' => 'Tambah Mata Kuliah']);
    }

    public function simpanMK(Request $request)
    {
        Courses::create($request->all());
        return redirect()->route('lihatMk')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function hapusMK(Request $request)
    {
        $data = Courses::findOrFail($request->id);
        $data->delete();
        return redirect()->route('lihatMk')->with('success', 'Mata kuliah berhasil dihapus.');
    }

    public function editMK(Request $request)
    {
        $dosen = Lecturers::all();
        $data = Courses::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $data->kode_mk = $request->kode_mk;
            $data->nama_matakuliah = $request->nama_matakuliah;
            $data->sks = $request->sks;
            $data->id_dosen = $request->id_dosen;
            $data->save();
            return redirect()->route('lihatMk')->with('success', 'Mata kuliah berhasil diubah.');
        }
        return view('admin.MK.editMK', ['data' => $data, 'dosen' => $dosen, 'dir' => 'Mata Kuliah',  'dirsub' => 'Edit Mata Kuliah']);
    }
}
