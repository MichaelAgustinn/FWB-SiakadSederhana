<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function lihatMahasiswa()
    {
        $mhs = Students::all();
        return view("admin.Mahasiswa.lihatSt", ["mhs" => $mhs, 'dir' => 'Mahasiswa', 'dirsub' => 'Jadwal > Lihat Mahasiswa']);
    }

    public function tambahMahasiswa(Request $request)
    {
        if ($request->isMethod("post")) {
            $mhs = new Students;
            $mhs->nim = $request->nim;
            $mhs->name = $request->name;
            $mhs->email = $request->email;
            $mhs->save();
            return redirect('/lihatmahasiswa')->with("success", "Data Berhasil Ditambahkan");
        }
        return view("admin.Mahasiswa.tambahSt", ['dir' => 'Mahasiswa', 'dirsub' => 'Jadwal > Tambah Mahasiswa']);
    }

    public function editMahasiswa(Request $request)
    {
        $mhs = Students::findOrFail($request->id);
        if ($request->isMethod("post")) {
            $mhs->nim = $request->nim;
            $mhs->name = $request->name;
            $mhs->email = $request->email;
            $mhs->save();
            return redirect('/lihatmahasiswa')->with("success", "Data Berhasil Diubah");
        }
        return view("admin.Mahasiswa.editSt", ['data' => $mhs, 'dir' => 'Mahasiswa', 'dirsub' => 'Jadwal > Edit Mahasiswa']);
    }

    public function hapusMahasiswa(Request $request)
    {
        $mhs = Students::findOrFail($request->id);
        $mhs->delete();
        return redirect('/lihatmahasiswa')->with("success", "Data Berhasil Dihapus");
    }
}
