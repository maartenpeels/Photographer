<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function approve()
    {
        return view('managers.approve');
    }
}
