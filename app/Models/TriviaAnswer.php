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

    public function getScore() 
    {
        $arrAnswer = $this->answer_data;
        $correctCount = 0;
        $totalCount = count($arrAnswer);

        foreach ($arrAnswer as $answer) {
            if ($answer['isCorrect']) {
                $correctCount++;
            }
        }

        $score = $correctCount / $totalCount * 100;

        return [
            'correctCount' => $correctCount,
            'totalCount' => $totalCount,
            'score' => $score,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
