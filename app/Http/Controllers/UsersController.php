<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UsersController extends Controller
{
    public function index(): View
    {
        return view('users');
    }
}
