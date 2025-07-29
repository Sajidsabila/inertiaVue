<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = "Ben";
        return inertia('User/Index', [
            'user' => $user
        ]);
    }
}
