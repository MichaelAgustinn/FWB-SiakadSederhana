<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Courses_310 extends Model
{
    protected $table = "student_courses_310";

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id', 'id');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedules::class, 'schedule_id', 'id');
    }
}
