<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Family;

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
        $boolean = 1;
        
        $novaFamilia = new Family;
        $novaFamilia->save();
        $codFamilia = Family::select('id')->orderBy('id', 'DESC')->first()->id;
        
        $imageName = null;
        
        if(isset($input['image'])){
            
            $requestImage = $input['image'];
            
            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;
            
            $requestImage->move(public_path('assets/img/avatars'), $imageName);
            
        }
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'master' => ['boolean'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
            
        return User::create([
            
            'name' => $input['name'],
            'email' => $input['email'],
            'master' => $boolean,
            'password' => Hash::make($input['password']),
            'family_id' => $codFamilia,
            'profile_photo_path' => $imageName,
            ]);
        dd('Olá');
    }
}
