<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    
    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        'email'
    ];

    public $timestamps = true;

    /**
     * Define many-to-many relationship with Course
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'student_id', 'course_id')
                    ->withTimestamps();
    }
}