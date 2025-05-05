<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TriviaAnswer extends Model
{
    protected $fillable = [
        'user_id',
        'answer_data',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'answer_data' => 'array',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
