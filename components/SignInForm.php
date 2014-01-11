<?php namespace Plugins\RainLab\User\Components;

use Auth;
use Validator;
use Modules\Cms\Classes\ComponentBase;
use October\Rain\Support\ValidationException;

class SignInForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Sign in',
            'description' => 'User sign in form.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSignin()
    {
        $rules = [
            'email'    => 'required|email|min:2|max:64',
            'password' => 'required|min:2'
        ];

        $validation = Validator::make(post(), $rules);
        if ($validation->fails())
            throw new ValidationException($validation);

        // Authenticate user
        $user = Auth::authenticate([
            'email' => post('email'),
            'password' => post('password')
        ], true);

        // Redirect to the intended page after successful sign in
        if (post('redirect'))
            return Redirect::intended(post('redirect'));
    }

}