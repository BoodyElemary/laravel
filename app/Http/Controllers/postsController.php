<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class postsController extends Controller
{
    //
    function index()
    {
        $posts = posts::get();
        return view("index", ["posts" => $posts]);
    }
}