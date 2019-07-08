<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
        # code...
        return view('users.create');
    }

    public function show(User $user)
    {
        # code...
        return view('users.show',compact('user'));
    }
}
