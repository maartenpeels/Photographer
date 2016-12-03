<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;

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

        return redirect('/');
    }
}
