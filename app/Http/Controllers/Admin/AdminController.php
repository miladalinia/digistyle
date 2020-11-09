<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.panel');
    }

    public function list()
    {
        $users = User::paginate(10);
        return view('Admin.users',compact('users'));
    }
}
