<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    
    protected $fillable = [
        'course_code',
        'course_name',
        'capacity'
    ];

    public $timestamps = true;

    /**
     * Define many-to-many relationship with Student
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments', 'course_id', 'student_id')
                    ->withTimestamps();
    }
    
    /**
     * Check if course has available slots
     */
    public function hasAvailableSlot()
    {
        return $this->students()->count() < $this->capacity;
    }
}