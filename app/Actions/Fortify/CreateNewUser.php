<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Referral;
use App\Models\Settings;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $settings = Settings::where('id','1')->first();
        
        if ($settings->captcha == "true") {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'username'=> ['required', 'unique:users,username'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'g-recaptcha-response' => 'required|captcha',
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();
        } else {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'username'=> ['required', 'unique:users,username'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();
        }

        if(session('ref_by')) {
            $ref_by = session('ref_by');
            $user= User::where('username', $ref_by)->first();
            $ref_by_id = $user->id;
        }else {
            $ref_by_id = NULL;
        }

        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'ref_by' => $ref_by_id,
            'password' => Hash::make($input['password']),
        ]);
    }
}
