<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        sleep(2);
        return inertia('User/Index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return inertia('User/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('user.index');
    }
}
