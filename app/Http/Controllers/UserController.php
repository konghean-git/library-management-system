<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('users.khmer_name', 'users.latin_name', 'users.gender', 'user_departments.name as department_name', 'users.code', 'users.phone', 'users.email')->join('user_departments', 'users.department_id', 'user_departments.id')->get();

        return view('users.user', ['users' => $users]);
    }
}
