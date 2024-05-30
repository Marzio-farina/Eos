<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255','min:3'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ],[
            'name.required' => 'Inserisci un Username',
            'name.min' => 'Inserisci minimo 3 caratteri',
            'name.string' => 'caratteri non validi',
            'name.max' => 'caratteri in eccesso',
            'email.required' => 'Inserisci l\' Email',
            'email.string' => 'Inserisci dei caratteri validi',
            'email.email'=> 'Inserisci un email valida',
            'email.max' => 'caratteri in eccesso',
            'password.required' => 'Inserisci una password',
            'password.min'=> 'Inserisci minimo 8 caratteri',
            'password.confirmed' => 'Le password non combaciano',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
