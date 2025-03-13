<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedules extends Model
{
    protected $table = "schedules_310";

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }

    public function student_courses(): HasMany
    {
        return $this->hasMany(Student_Courses_310::class, 'schedule_id', 'id');
    }
}
