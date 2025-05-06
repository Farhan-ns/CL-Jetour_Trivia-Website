<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('user/start');
})->name('home');

Route::prefix('/user')->group(function () {
    Route::get('/registrasi', function () {
        return view('user.register');
    });

    Route::get('/start', function () {
        return view('user.start');
    });

    Route::get('/trivia', function () {
        $questions = Question::all();
        return view('user.trivia', compact('questions'));
    });

    Route::get('/finish', function () {
        return view('user.finish');
    });

    Route::post('/finish', function () {
        $validatedUser = session('active_session_user');
        $validatedAnswer = session('active_session_answer');
        
        $user = User::create($validatedUser);
        $user->triviaAnswer()->create([
            'answer_data' => $validatedAnswer
        ]);

        return redirect('/user/thank-you')->with('validatedAnswer', $validatedAnswer);
    });

    Route::get('/thank-you', function() {
        $validatedAnswer = session('validatedAnswer'); 

        $correctCount = 0;
        $totalCount = count($validatedAnswer);
        foreach ($validatedAnswer as $answer) {
            if ($answer['isCorrect'])  {
                $correctCount += 1;
            }
        }

        $score = $correctCount / $totalCount * 100;

        session([
            'active_session_user' => null,
            'active_session_answer' => null,
        ]);

        return view('user.thank-you', compact('correctCount', 'totalCount', 'score'));
    });
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
