<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
    * Get the validation rules used to validate passwords.
    *
    * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
    */
    protected function passwordRules(): array
    {
        return [
            'required',
            'min:8',
            'regex:/[^A-Za-z0-9]/',
            'regex:/[A-Z]/',
            'regex:/[a-z]/',
            'regex:/[0-9]/',
            'string',
            new Password,
            'confirmed'];
        }
    }
