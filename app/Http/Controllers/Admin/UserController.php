<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('created_at')->get();
        return view('admin.users.index')
            ->with([
                'users' => $users
            ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }
}
