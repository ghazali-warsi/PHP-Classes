<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser()
    {
        return view('services');
    }

    public function UserDetail()
    {
        return view('contact');
    }

}