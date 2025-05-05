<?php

namespace App\Livewire;

use App\Models\Question;
use Flux\Flux;
use Livewire\Component;

class Trivia extends Component
{
    public $questions;
    public $currentIndex = 0;
    public $totalQuestionsCount;
    public $correctQuestionCount = 0;
    public $answerData = [];

    public function mount()
    {
        $this->totalQuestionsCount = Question::count();
    }

    public function selectAnswer($choice)
    {
        $answerText = array_key_first($choice);
        $isCorrect = $choice[$answerText];
        $this->storeAnswer($answerText, $isCorrect);

        if ($isCorrect) {
            $this->correctQuestionCount++;
        }

        $this->nextQuestion();

        // if (!$isCorrect) {
        //     Flux::modal('choice-popup')->show();
        //     return;
        // }

        // $this->nextQuestion();
    }

    public function nextQuestion()
    {
        if ($this->currentIndex < $this->questions->count() - 1) {
            $this->currentIndex++;
        } else {
            // Handle trivia ends here
        }
    }

    public function storeAnswer($answerText, $isCorrect)
    {
        $this->answerData[$this->currentIndex] = [
            'question' => $this->questions[$this->currentIndex]->question,
            'answer' => $answerText,
            'isCorrect' => $isCorrect,
        ];
    }

    public function render()
    {
        $question = $this->questions[$this->currentIndex];
        $choices = collect($question->choices);

        return view('livewire.trivia', compact('question', 'choices'));
    }
}
