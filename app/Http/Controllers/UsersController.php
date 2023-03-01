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

    function create()
    {
        return view("users.create");
    }

    function store(Request $request)
    {
        // $validate = $request->validate([
        //     "title" => "required",
        //     "author" => "required",
        //     "description" => "required",
        // ]);
        // $posts->update($request->except(['_method', '_token']));
        User::create($request->all());
        return redirect("/users");
    }
}