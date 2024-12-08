<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class theory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cover',
        'academic_response',
        'philosophy',
        'cv',
        'syllabus',
        'academic_progress',
        'syllabus_send',
        'attendance_record',
        'teaching_activities',
        'Entrance_evaluation',
        'first_evaluation',
        'Second_evaluation',
        'Third_evaluation',
        'assignment_proyect',
        'final_proyect',
        'Calification_metric',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'cover' => 'boolean',
            'academic_response' => 'boolean',
            'philosophy' => 'boolean',
            'cv' => 'boolean',
            'syllabus' => 'boolean',
            'academic_progress' => 'boolean',
            'syllabus_send' => 'boolean',
            'attendance_record' => 'boolean',
            'teaching_activities' => 'boolean',
            'Entrance_evaluation' => 'boolean',
            'first_evaluation' => 'boolean',
            'Second_evaluation' => 'boolean',
            'Third_evaluation' => 'boolean',
            'assignment_proyect' => 'boolean',
            'final_proyect' => 'boolean',
            'Calification_metric' => 'boolean',
        ];
    }

    // Relación inversa (Reviwer)
    public function reviewer() {
        return $this->belongsTo(Portfolio::class);
    }
}
