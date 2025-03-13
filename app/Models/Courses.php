<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Courses extends Model
{
    protected $table = 'courses_310'; // Pastikan nama tabel sesuai
    protected $fillable = ['kode_mk', 'nama_matakuliah', 'sks', 'id_dosen']; // Sesuaikan dengan kolom di database


    public static function ambilDataMatakuliah()
    {
        return DB::table('courses_310')
            ->join('lecturers_310', 'courses_310.id_dosen', '=', 'lecturers_310.id')
            ->select('courses_310.*', 'lecturers_310.nama_dosen as nm_dsn')
            ->get();
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturers::class, 'id_dosen', 'id');
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedules::class, 'course_id', 'id');
    }
}
