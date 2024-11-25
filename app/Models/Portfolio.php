<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'n-send',
        'acepted',
        'theory',
        'practice',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'n_send' => 'integer',
            'accepted' => 'boolean',
            'theory' => 'boolean',
            'practice' => 'boolean',
        ];
    }

    // Metodo para retornar los demas profesores
    public function academic() {
        return $this->hasOne(Academic::class);
    }

    // Metodo para retornar los demas profesores
    public function revisions() {
        return $this->hasMany(Revision::class);
    }
}
