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
     * @param array $input
     * @return User
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:150'],
            'lastname' => ['required', 'string', 'max:150'],
            'username' =>['required','string','max:255',Rule::unique(User::class)],
            'phone' => ['max:12'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'firstname' => $input['firstname'],
            'lastname'=> $input['lastname'],
            'username'=> $input['username'],
            'email' => $input['email'],
            'phone'=> $input['phone']??"",
            'password' => Hash::make($input['password']),
        ]);
    }
}
