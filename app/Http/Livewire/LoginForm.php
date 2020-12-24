<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class LoginForm extends Component
{
    /**
     * @var string
     */
    public string $email = '';

    /**
     * @var string
     */
    public string $password = '';

    /**
     *
     */
    public function updatedPassword()
    {
        $this->validate(['password' => ['required', 'string', new Password]]);
    }

    /**
     *
     */
    public function login()
    {

    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.login-form');
    }
}
