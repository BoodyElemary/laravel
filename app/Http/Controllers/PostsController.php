<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;



class PostsController extends Controller
{
    //

    function index()
    {
        $posts = posts::get();
        return view("posts.index", ["posts" => $posts]);
    }

    function create()
    {
        return view("posts.create");
    }

    function store(Request $request)
    {
        // $validate = $request->validate([
        //     "title" => "required",
        //     "author" => "required",
        //     "description" => "required",
        // ]);
        // $posts->update($request->except(['_method', '_token']));
        posts::create($request->all());
        return redirect("/");
    }
    function edit()
    {
        return view("posts.edit");
    }
}