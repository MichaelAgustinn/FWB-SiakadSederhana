<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{
    protected $table = "students_310";

    public function student_courses(): HasMany
    {
        return $this->hasMany(Student_Courses_310::class, 'student_id', 'id');
    }
}
