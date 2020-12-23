<?php

namespace App\Http\Livewire;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;


    public function updatedName()
    {
        print_r('email');
    }

    public function register()
    {
        $result = (new CreateNewUser)->create($this->form);

        dd($result);
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
