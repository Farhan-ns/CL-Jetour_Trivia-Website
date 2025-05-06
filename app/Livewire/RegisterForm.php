<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $name = '';
    public $email = '';
    public $city = '';
    public $phone = '';
    public $is_agree_to_terms = '';

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'phone' => 'required|numeric|min:6',
        ]);
        $validated['password'] = $validated['email'] . $validated['phone'];

        session(['active_session_user' => $validated]);
        
        $this->redirect('/user/trivia');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
