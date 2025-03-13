<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function lihatDosen()
    {
        $dosen = Lecturers::all();
        return view('admin.Dosen.lihatDos', ['dosen' => $dosen, 'dir' => 'Dosen', 'dirsub' => 'Dosen > Lihat Dosen']);
    }

    public function hapusDosen(Request $request)
    {
        $dosen = Lecturers::findOrFail($request->id);
        $dosen->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function tambahDosen(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = new Lecturers;
            $data->nidn = $request->nidn;
            $data->nama_dosen = $request->nama_dosen;
            $data->email = $request->email;
            $data->save();
            return redirect()->route('lihatDosen')->with('success', 'Data berhasil ditambah.');
        }
        return view('admin.Dosen.tambahDos', ['dir' => 'Dosen', 'dirsub' => 'Dosen > Tambah Dosen']);
    }

    public function editDosen(Request $request)
    {
        $data = Lecturers::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $data->nidn = $request->nidn;
            $data->nama_dosen = $request->nama_dosen;
            $data->email = $request->email;
            $data->save();
            return redirect()->route('lihatDosen')->with('success', 'Data berhasil diubah.');
        }
        return view('admin.Dosen.editDos', ['data' => $data, 'dir' => 'Dosen',, 'dirsub' => 'Dosen > Edit Dosen']);
    }
}
