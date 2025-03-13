<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    protected $table = 'lecturers_310'; // Pastikan tabelnya benar

    public function courses()
    {
        return $this->hasMany(Courses::class, 'id_dosen', 'id');
    }

    
}
