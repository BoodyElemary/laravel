<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function index()
    {
        $users = User::get();
        return view("users.index", ["users" => $users]);
    }
}