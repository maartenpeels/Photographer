<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class RegisterController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
        $user = Sentinel::register($request->all());
        $activation = Activation::create($user);
        $role = sentinel::findRoleBySlug('user');

        $role->users()->attach($user);

        $this->sendActivationEmail($user, $activation->code);

        return redirect('login');
    }

    private function sendActivationEmail($user, $code)
    {
        Mail::send('emails.activation', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user) {
            $message->to($user->email);
            $message->subject("Hello $user->first_name, activate your account.");
        });
    }
}
