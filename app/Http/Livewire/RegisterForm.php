<?php

namespace App\Http\Livewire;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class RegisterForm extends Component
{
    /**
     * @var string
     */
    public string $name = '';

    /**
     * @var string
     */
    public string $email = '';

    /**
     * @var string
     */
    public string $password = '';

    /**
     * @var string
     */
    public string $passwordConfirmation = '';


    /**
     *
     */
    public function updatedName()
    {
        $this->validate(['name' => ['required', 'string', 'max:255']]);
    }

    /**
     *
     */
    public function updatedEmail()
    {
        $this->validate(['email' => [
            'required',
            'string',
            'email',
            'max:255',
            Rule::unique(User::class),
        ]]);
    }

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
    public function register()
    {
        $user = (new CreateNewUser)->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->passwordConfirmation,
        ]);

        if ($user) {
            \Auth::login($user);
            $this->redirect(route('project.index'));
        }
    }

    /**
     * @return Application|Factory|View
     */

    public function render()
    {
        return view('livewire.register-form');
    }
}
