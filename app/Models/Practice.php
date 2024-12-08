<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class practice extends Model
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
        'academic_progress',
        'attendance_record',
        'teaching_activities',
        'practices_grades',
        'projects',
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
            'academic_progress' => 'boolean',
            'attendance_record' => 'boolean',
            'teaching_activities' => 'boolean',
            'practices_grades' => 'boolean',
            'projects' => 'boolean',
        ];
    }

    // Relación inversa (Reviwer)
    public function reviewer() {
        return $this->belongsTo(Portfolio::class);
    }
}
